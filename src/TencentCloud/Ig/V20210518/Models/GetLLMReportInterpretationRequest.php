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
namespace TencentCloud\Ig\V20210518\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetLLMReportInterpretation请求参数结构体
 *
 * @method string getPartnerId() 获取<p>合作方ID</p>
 * @method void setPartnerId(string $PartnerId) 设置<p>合作方ID</p>
 * @method string getPartnerSecret() 获取<p>合作方密钥</p>
 * @method void setPartnerSecret(string $PartnerSecret) 设置<p>合作方密钥</p>
 * @method string getHospitalId() 获取<p>接入医院id</p>
 * @method void setHospitalId(string $HospitalId) 设置<p>接入医院id</p>
 * @method string getDialogueId() 获取<p>对话ID，由接入方生成，相同对话ID会保持相同的上下文，接入方根据业务场景使用相同或新建对话ID（建议使用UUID值）</p><p>入参限制：长度限制10-50</p>
 * @method void setDialogueId(string $DialogueId) 设置<p>对话ID，由接入方生成，相同对话ID会保持相同的上下文，接入方根据业务场景使用相同或新建对话ID（建议使用UUID值）</p><p>入参限制：长度限制10-50</p>
 * @method string getMessage() 获取<p>本次问答用户输入的问题</p>
 * @method void setMessage(string $Message) 设置<p>本次问答用户输入的问题</p>
 * @method array getReportFileInfos() 获取<p>报告文件信息</p>
 * @method void setReportFileInfos(array $ReportFileInfos) 设置<p>报告文件信息</p>
 * @method integer getResultType() 获取<p>返回类型：0:正常返回； 1:流式返回； 默认：0</p>
 * @method void setResultType(integer $ResultType) 设置<p>返回类型：0:正常返回； 1:流式返回； 默认：0</p>
 * @method string getPrompt() 获取<p>报告解读提示词</p>
 * @method void setPrompt(string $Prompt) 设置<p>报告解读提示词</p>
 * @method string getQaPrompt() 获取<p>无报告问答提示词</p>
 * @method void setQaPrompt(string $QaPrompt) 设置<p>无报告问答提示词</p>
 */
class GetLLMReportInterpretationRequest extends AbstractModel
{
    /**
     * @var string <p>合作方ID</p>
     */
    public $PartnerId;

    /**
     * @var string <p>合作方密钥</p>
     */
    public $PartnerSecret;

    /**
     * @var string <p>接入医院id</p>
     */
    public $HospitalId;

    /**
     * @var string <p>对话ID，由接入方生成，相同对话ID会保持相同的上下文，接入方根据业务场景使用相同或新建对话ID（建议使用UUID值）</p><p>入参限制：长度限制10-50</p>
     */
    public $DialogueId;

    /**
     * @var string <p>本次问答用户输入的问题</p>
     */
    public $Message;

    /**
     * @var array <p>报告文件信息</p>
     */
    public $ReportFileInfos;

    /**
     * @var integer <p>返回类型：0:正常返回； 1:流式返回； 默认：0</p>
     */
    public $ResultType;

    /**
     * @var string <p>报告解读提示词</p>
     */
    public $Prompt;

    /**
     * @var string <p>无报告问答提示词</p>
     */
    public $QaPrompt;

    /**
     * @param string $PartnerId <p>合作方ID</p>
     * @param string $PartnerSecret <p>合作方密钥</p>
     * @param string $HospitalId <p>接入医院id</p>
     * @param string $DialogueId <p>对话ID，由接入方生成，相同对话ID会保持相同的上下文，接入方根据业务场景使用相同或新建对话ID（建议使用UUID值）</p><p>入参限制：长度限制10-50</p>
     * @param string $Message <p>本次问答用户输入的问题</p>
     * @param array $ReportFileInfos <p>报告文件信息</p>
     * @param integer $ResultType <p>返回类型：0:正常返回； 1:流式返回； 默认：0</p>
     * @param string $Prompt <p>报告解读提示词</p>
     * @param string $QaPrompt <p>无报告问答提示词</p>
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
        if (array_key_exists("PartnerId",$param) and $param["PartnerId"] !== null) {
            $this->PartnerId = $param["PartnerId"];
        }

        if (array_key_exists("PartnerSecret",$param) and $param["PartnerSecret"] !== null) {
            $this->PartnerSecret = $param["PartnerSecret"];
        }

        if (array_key_exists("HospitalId",$param) and $param["HospitalId"] !== null) {
            $this->HospitalId = $param["HospitalId"];
        }

        if (array_key_exists("DialogueId",$param) and $param["DialogueId"] !== null) {
            $this->DialogueId = $param["DialogueId"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ReportFileInfos",$param) and $param["ReportFileInfos"] !== null) {
            $this->ReportFileInfos = [];
            foreach ($param["ReportFileInfos"] as $key => $value){
                $obj = new ReportFileInfoReq();
                $obj->deserialize($value);
                array_push($this->ReportFileInfos, $obj);
            }
        }

        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("QaPrompt",$param) and $param["QaPrompt"] !== null) {
            $this->QaPrompt = $param["QaPrompt"];
        }
    }
}
