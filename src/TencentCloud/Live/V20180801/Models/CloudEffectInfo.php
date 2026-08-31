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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云端特效信息。
 *
 * @method string getId() 获取<p>云端特效 ID。</p>
 * @method void setId(string $Id) 设置<p>云端特效 ID。</p>
 * @method string getPrompt() 获取<p>云端特效描述词。</p>
 * @method void setPrompt(string $Prompt) 设置<p>云端特效描述词。</p>
 * @method string getFlag() 获取<p>云端特效标签。</p>
 * @method void setFlag(string $Flag) 设置<p>云端特效标签。</p>
 * @method string getStatus() 获取<p>云端特效生成状态。<br>生成中 - GENERATING。<br>处理中 - PROCESSING。<br>生成失败 - FAILED。<br>已完成 - FINISH。</p>
 * @method void setStatus(string $Status) 设置<p>云端特效生成状态。<br>生成中 - GENERATING。<br>处理中 - PROCESSING。<br>生成失败 - FAILED。<br>已完成 - FINISH。</p>
 * @method string getMessage() 获取<p>特效信息，生成失败时，此处返回失败原因。</p>
 * @method void setMessage(string $Message) 设置<p>特效信息，生成失败时，此处返回失败原因。</p>
 * @method string getPreviewImageUrl() 获取<p>云端特效预览图片。</p>
 * @method void setPreviewImageUrl(string $PreviewImageUrl) 设置<p>云端特效预览图片。</p>
 * @method string getType() 获取<p>云端特效类型。<br>PGC : 官方精品特效。<br>AIGC : AI生成的特效。<br>UGC : 用户上传特效。</p>
 * @method void setType(string $Type) 设置<p>云端特效类型。<br>PGC : 官方精品特效。<br>AIGC : AI生成的特效。<br>UGC : 用户上传特效。</p>
 * @method string getCreateTime() 获取<p>云端特效创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>云端特效创建时间。</p>
 * @method string getUpdateTime() 获取<p>云端特效更新时间。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>云端特效更新时间。</p>
 */
class CloudEffectInfo extends AbstractModel
{
    /**
     * @var string <p>云端特效 ID。</p>
     */
    public $Id;

    /**
     * @var string <p>云端特效描述词。</p>
     */
    public $Prompt;

    /**
     * @var string <p>云端特效标签。</p>
     */
    public $Flag;

    /**
     * @var string <p>云端特效生成状态。<br>生成中 - GENERATING。<br>处理中 - PROCESSING。<br>生成失败 - FAILED。<br>已完成 - FINISH。</p>
     */
    public $Status;

    /**
     * @var string <p>特效信息，生成失败时，此处返回失败原因。</p>
     */
    public $Message;

    /**
     * @var string <p>云端特效预览图片。</p>
     */
    public $PreviewImageUrl;

    /**
     * @var string <p>云端特效类型。<br>PGC : 官方精品特效。<br>AIGC : AI生成的特效。<br>UGC : 用户上传特效。</p>
     */
    public $Type;

    /**
     * @var string <p>云端特效创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>云端特效更新时间。</p>
     */
    public $UpdateTime;

    /**
     * @param string $Id <p>云端特效 ID。</p>
     * @param string $Prompt <p>云端特效描述词。</p>
     * @param string $Flag <p>云端特效标签。</p>
     * @param string $Status <p>云端特效生成状态。<br>生成中 - GENERATING。<br>处理中 - PROCESSING。<br>生成失败 - FAILED。<br>已完成 - FINISH。</p>
     * @param string $Message <p>特效信息，生成失败时，此处返回失败原因。</p>
     * @param string $PreviewImageUrl <p>云端特效预览图片。</p>
     * @param string $Type <p>云端特效类型。<br>PGC : 官方精品特效。<br>AIGC : AI生成的特效。<br>UGC : 用户上传特效。</p>
     * @param string $CreateTime <p>云端特效创建时间。</p>
     * @param string $UpdateTime <p>云端特效更新时间。</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("PreviewImageUrl",$param) and $param["PreviewImageUrl"] !== null) {
            $this->PreviewImageUrl = $param["PreviewImageUrl"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
