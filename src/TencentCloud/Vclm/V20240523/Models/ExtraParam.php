<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩展字段。
 *
 * @method string getUserDesignatedUrl() 获取预签名的上传url，支持把视频直接传到客户指定的地址。
 * @method void setUserDesignatedUrl(string $UserDesignatedUrl) 设置预签名的上传url，支持把视频直接传到客户指定的地址。
 * @method string getCallbackUrl() 获取回调地址
需要您在创建任务时主动设置 CallbackUrl，请求方法为 POST，当视频生成结束时，我们将向此地址发送生成结果。
数据格式如下：
{
    "JobId": "1397428070633955328",
    "Status": "DONE",
    "ErrorCode": "",
    "ErrorMessage": "",
    "ResultVideoUrl": "https://vcg.cos.tencentcos.cn/template_to_video/fa80b846-b933-4981-afad-8a39b46ef2ca.mp4"
}
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调地址
需要您在创建任务时主动设置 CallbackUrl，请求方法为 POST，当视频生成结束时，我们将向此地址发送生成结果。
数据格式如下：
{
    "JobId": "1397428070633955328",
    "Status": "DONE",
    "ErrorCode": "",
    "ErrorMessage": "",
    "ResultVideoUrl": "https://vcg.cos.tencentcos.cn/template_to_video/fa80b846-b933-4981-afad-8a39b46ef2ca.mp4"
}
 */
class ExtraParam extends AbstractModel
{
    /**
     * @var string 预签名的上传url，支持把视频直接传到客户指定的地址。
     */
    public $UserDesignatedUrl;

    /**
     * @var string 回调地址
需要您在创建任务时主动设置 CallbackUrl，请求方法为 POST，当视频生成结束时，我们将向此地址发送生成结果。
数据格式如下：
{
    "JobId": "1397428070633955328",
    "Status": "DONE",
    "ErrorCode": "",
    "ErrorMessage": "",
    "ResultVideoUrl": "https://vcg.cos.tencentcos.cn/template_to_video/fa80b846-b933-4981-afad-8a39b46ef2ca.mp4"
}
     */
    public $CallbackUrl;

    /**
     * @param string $UserDesignatedUrl 预签名的上传url，支持把视频直接传到客户指定的地址。
     * @param string $CallbackUrl 回调地址
需要您在创建任务时主动设置 CallbackUrl，请求方法为 POST，当视频生成结束时，我们将向此地址发送生成结果。
数据格式如下：
{
    "JobId": "1397428070633955328",
    "Status": "DONE",
    "ErrorCode": "",
    "ErrorMessage": "",
    "ResultVideoUrl": "https://vcg.cos.tencentcos.cn/template_to_video/fa80b846-b933-4981-afad-8a39b46ef2ca.mp4"
}
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UserDesignatedUrl",$param) and $param["UserDesignatedUrl"] !== null) {
            $this->UserDesignatedUrl = $param["UserDesignatedUrl"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }
    }
}
