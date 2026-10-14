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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视觉理解计划信息
 *
 * @method string getVLPlanId() 获取<p>计划ID</p>
 * @method void setVLPlanId(string $VLPlanId) 设置<p>计划ID</p>
 * @method string getName() 获取<p>计划名称</p>
 * @method void setName(string $Name) 设置<p>计划名称</p>
 * @method string getDescribe() 获取<p>计划描述</p>
 * @method void setDescribe(string $Describe) 设置<p>计划描述</p>
 * @method string getVLTemplateId() 获取<p>视觉理解模板ID</p>
 * @method void setVLTemplateId(string $VLTemplateId) 设置<p>视觉理解模板ID</p>
 * @method CallbackURL getCallback() 获取<p>回调通知配置</p>
 * @method void setCallback(CallbackURL $Callback) 设置<p>回调通知配置</p>
 * @method integer getFileExpires() 获取<p>文件过期时间（秒）</p>
 * @method void setFileExpires(integer $FileExpires) 设置<p>文件过期时间（秒）</p>
 * @method integer getChannelCount() 获取<p>计划包含的通道数量</p>
 * @method void setChannelCount(integer $ChannelCount) 设置<p>计划包含的通道数量</p>
 * @method string getCreatedAt() 获取<p>创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
 * @method string getUpdatedAt() 获取<p>最近一次更新时间</p>
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>最近一次更新时间</p>
 */
class VLPlanInfo extends AbstractModel
{
    /**
     * @var string <p>计划ID</p>
     */
    public $VLPlanId;

    /**
     * @var string <p>计划名称</p>
     */
    public $Name;

    /**
     * @var string <p>计划描述</p>
     */
    public $Describe;

    /**
     * @var string <p>视觉理解模板ID</p>
     */
    public $VLTemplateId;

    /**
     * @var CallbackURL <p>回调通知配置</p>
     */
    public $Callback;

    /**
     * @var integer <p>文件过期时间（秒）</p>
     */
    public $FileExpires;

    /**
     * @var integer <p>计划包含的通道数量</p>
     */
    public $ChannelCount;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>最近一次更新时间</p>
     */
    public $UpdatedAt;

    /**
     * @param string $VLPlanId <p>计划ID</p>
     * @param string $Name <p>计划名称</p>
     * @param string $Describe <p>计划描述</p>
     * @param string $VLTemplateId <p>视觉理解模板ID</p>
     * @param CallbackURL $Callback <p>回调通知配置</p>
     * @param integer $FileExpires <p>文件过期时间（秒）</p>
     * @param integer $ChannelCount <p>计划包含的通道数量</p>
     * @param string $CreatedAt <p>创建时间</p>
     * @param string $UpdatedAt <p>最近一次更新时间</p>
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
        if (array_key_exists("VLPlanId",$param) and $param["VLPlanId"] !== null) {
            $this->VLPlanId = $param["VLPlanId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("VLTemplateId",$param) and $param["VLTemplateId"] !== null) {
            $this->VLTemplateId = $param["VLTemplateId"];
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = new CallbackURL();
            $this->Callback->deserialize($param["Callback"]);
        }

        if (array_key_exists("FileExpires",$param) and $param["FileExpires"] !== null) {
            $this->FileExpires = $param["FileExpires"];
        }

        if (array_key_exists("ChannelCount",$param) and $param["ChannelCount"] !== null) {
            $this->ChannelCount = $param["ChannelCount"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
