<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadFiles请求参数结构体
 *
 * @method Agent getAgent() 获取应用相关信息，若是第三方应用集成调用 appid 和proxyappid 必填
 * @method void setAgent(Agent $Agent) 设置应用相关信息，若是第三方应用集成调用 appid 和proxyappid 必填
 * @method string getBusinessType() 获取文件对应业务类型
1. TEMPLATE - 模板； 文件类型：.pdf/.doc/.docx/.html
2. DOCUMENT - 签署过程及签署后的合同文档/图片控件 文件类型：.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html
 * @method void setBusinessType(string $BusinessType) 设置文件对应业务类型
1. TEMPLATE - 模板； 文件类型：.pdf/.doc/.docx/.html
2. DOCUMENT - 签署过程及签署后的合同文档/图片控件 文件类型：.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html
 * @method array getFileInfos() 获取上传文件内容数组，最多支持20个文件
 * @method void setFileInfos(array $FileInfos) 设置上传文件内容数组，最多支持20个文件
 * @method UserInfo getOperator() 获取操作者的信息
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息
 */
class UploadFilesRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息，若是第三方应用集成调用 appid 和proxyappid 必填
     */
    public $Agent;

    /**
     * @var string 文件对应业务类型
1. TEMPLATE - 模板； 文件类型：.pdf/.doc/.docx/.html
2. DOCUMENT - 签署过程及签署后的合同文档/图片控件 文件类型：.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html
     */
    public $BusinessType;

    /**
     * @var array 上传文件内容数组，最多支持20个文件
     */
    public $FileInfos;

    /**
     * @var UserInfo 操作者的信息
     */
    public $Operator;

    /**
     * @param Agent $Agent 应用相关信息，若是第三方应用集成调用 appid 和proxyappid 必填
     * @param string $BusinessType 文件对应业务类型
1. TEMPLATE - 模板； 文件类型：.pdf/.doc/.docx/.html
2. DOCUMENT - 签署过程及签署后的合同文档/图片控件 文件类型：.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html
     * @param array $FileInfos 上传文件内容数组，最多支持20个文件
     * @param UserInfo $Operator 操作者的信息
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new UploadFile();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
