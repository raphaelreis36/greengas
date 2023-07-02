<?php

enum Email: string
{
  case To = "raphael.reis.a@gmail.com";
  case From = "contato@mktprod.com";
  case Subject = "[GreenGas Site] - ";
  case SuccessMessage = "Sua mensagem foi enviada com sucesso. Obrigado pelo contato!";
  case ErrorMessage = "Erro ao tentar enviar o e-mail. Tente novamente!";
}