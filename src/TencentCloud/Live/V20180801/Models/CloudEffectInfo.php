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
 * @method string getId() 获取云端特效 ID。
 * @method void setId(string $Id) 设置云端特效 ID。
 * @method string getPrompt() 获取云端特效描述词。
 * @method void setPrompt(string $Prompt) 设置云端特效描述词。
 * @method string getFlag() 获取云端特效标签。
 * @method void setFlag(string $Flag) 设置云端特效标签。
 * @method string getStatus() 获取云端特效生成状态。
生成中 - GENERATING。
处理中 - PROCESSING。
生成失败 - FAILED。
已完成 - FINISH。

 * @method void setStatus(string $Status) 设置云端特效生成状态。
生成中 - GENERATING。
处理中 - PROCESSING。
生成失败 - FAILED。
已完成 - FINISH。

 * @method string getMessage() 获取特效信息，生成失败时，此处返回失败原因。
 * @method void setMessage(string $Message) 设置特效信息，生成失败时，此处返回失败原因。
 * @method string getPreviewImageUrl() 获取云端特效预览图片。
 * @method void setPreviewImageUrl(string $PreviewImageUrl) 设置云端特效预览图片。
 * @method string getType() 获取云端特效类型。
PGC : 官方精品特效。
AIGC : AI生成的特效。
UGC : 用户上传特效。
 * @method void setType(string $Type) 设置云端特效类型。
PGC : 官方精品特效。
AIGC : AI生成的特效。
UGC : 用户上传特效。
 * @method string getCreateTime() 获取云端特效创建时间。
 * @method void setCreateTime(string $CreateTime) 设置云端特效创建时间。
 * @method string getUpdateTime() 获取云端特效更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置云端特效更新时间。
 */
class CloudEffectInfo extends AbstractModel
{
    /**
     * @var string 云端特效 ID。
     */
    public $Id;

    /**
     * @var string 云端特效描述词。
     */
    public $Prompt;

    /**
     * @var string 云端特效标签。
     */
    public $Flag;

    /**
     * @var string 云端特效生成状态。
生成中 - GENERATING。
处理中 - PROCESSING。
生成失败 - FAILED。
已完成 - FINISH。

     */
    public $Status;

    /**
     * @var string 特效信息，生成失败时，此处返回失败原因。
     */
    public $Message;

    /**
     * @var string 云端特效预览图片。
     */
    public $PreviewImageUrl;

    /**
     * @var string 云端特效类型。
PGC : 官方精品特效。
AIGC : AI生成的特效。
UGC : 用户上传特效。
     */
    public $Type;

    /**
     * @var string 云端特效创建时间。
     */
    public $CreateTime;

    /**
     * @var string 云端特效更新时间。
     */
    public $UpdateTime;

    /**
     * @param string $Id 云端特效 ID。
     * @param string $Prompt 云端特效描述词。
     * @param string $Flag 云端特效标签。
     * @param string $Status 云端特效生成状态。
生成中 - GENERATING。
处理中 - PROCESSING。
生成失败 - FAILED。
已完成 - FINISH。

     * @param string $Message 特效信息，生成失败时，此处返回失败原因。
     * @param string $PreviewImageUrl 云端特效预览图片。
     * @param string $Type 云端特效类型。
PGC : 官方精品特效。
AIGC : AI生成的特效。
UGC : 用户上传特效。
     * @param string $CreateTime 云端特效创建时间。
     * @param string $UpdateTime 云端特效更新时间。
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
