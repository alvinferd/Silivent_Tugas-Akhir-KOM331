section .data
    scan_format: db "%f",0
    print_format: db "%.4f",10,0

 
section .bss
    result_num: resb 4
    b resb 4
    c resb 4
    area resq 1
   
section .text
    extern printf
    extern scanf
    extern fflush
    global main
  
main:
       
    push result_num
    push scan_format
    call scanf
    add esp, 8
    
    mov dword[b], 4
    mov dword[c], 3
     
                finit                          
                fldpi                          
                fmul    dword [result_num]      
                fmul    dword [result_num]
                fmul    dword [result_num]
                fld     dword [b]
                fdiv    dword [c]
                fmulp
                fstp    qword [area]            ;
 
                ; printf("%f\n", area)
                push    dword [area+4]
                push    dword [area]
                push    print_format
                call    printf                  ; %f --> double
                add     esp, 12
           
    flush:
        push    0
        call    fflush
        add     esp,4
          
    exit:
        mov eax, 1
        mov ebx, 0
        int 0x80