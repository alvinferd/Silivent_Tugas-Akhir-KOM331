global main
extern printf
extern scanf
extern fflush

section .data
    baca db '%s', 0
    print db '%d', 0
    printstr db "%c",0
    printstrnl db "%c",10,0
    

section .bss
    kata resb 41

section .text

main:

    push kata
    push baca
    call scanf
    add esp, 8

    movzx eax,byte[kata]
    push eax
    push printstr
    call printf
    add esp,8
    
    mov ebx, 0
    mov ecx, 21
    mov edi, kata
    mov eax, 0
    repne scasb

    mov ebx, 20
    sub ebx, ecx
    sub ebx,2

    push ebx
    push print
    call printf
    add esp, 8

    add ebx,1
    movzx edx,byte[kata+ebx]
    push edx
    push printstrnl
    call printf
    add esp,8

flushh:
    push 0
    call fflush
    add esp, 4
exit:
    mov eax, 1
    mov ebx, 0
    int 0x80