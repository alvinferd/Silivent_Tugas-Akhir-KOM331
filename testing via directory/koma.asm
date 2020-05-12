global main
extern printf
extern scanf
extern fflush

section .data
    baca db '%s', 0
    print db '%d', 10, 0

section .bss
    kata resb 41

section .text

main:
    push kata
    push baca
    call scanf
    add esp, 8
    mov ebx,0
    
    mov ecx, 41
    mov edi, kata
    mov eax, ","
cek:
    add ebx,1
    repne scasb
    
    cmp ecx,0
    jne cek

    push ebx
    push print
    call printf
    add esp, 8

exit:
    push 0
    call fflush
    add esp, 4
    mov eax, 1
mov ebx, 0
int 0x80