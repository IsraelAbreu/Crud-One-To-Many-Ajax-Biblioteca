const _token = $("#_token").val();

const DeletarLivro = (id) => {
    $.ajax({
        type: "delete",
        url: `livros/destroy/${id}`,
        data:{
            _token
        },
        success: function (response) {
            alert("Livro deletado com sucesso!")

            $(`#tr-livro-${id}`).remove();
        }
    });
}

const DeletarCategoria = (id) => {
    $.ajax({
        type: "delete",
        url: `/categoria/destroy/${id}`,
        data:{
            _token
        },
        success: function (response) {
            alert("Categoria deletada com sucesso!")

            $(`#tr-categoria-${id}`).remove();
        }
    });
}
