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
 * ModifyVLPlan请求参数结构体
 *
 * @method string getVLPlanId() 获取<p>计划 ID</p>
 * @method void setVLPlanId(string $VLPlanId) 设置<p>计划 ID</p>
 * @method string getName() 获取<p>新计划名称</p>
 * @method void setName(string $Name) 设置<p>新计划名称</p>
 * @method string getDescribe() 获取<p>新计划描述</p>
 * @method void setDescribe(string $Describe) 设置<p>新计划描述</p>
 * @method string getVLTemplateId() 获取<p>新关联视觉理解模板 ID</p>
 * @method void setVLTemplateId(string $VLTemplateId) 设置<p>新关联视觉理解模板 ID</p>
 * @method integer getFileExpires() 获取<p>新存储天数，范围 [7, 1080]，0 表示不修改</p>
 * @method void setFileExpires(integer $FileExpires) 设置<p>新存储天数，范围 [7, 1080]，0 表示不修改</p>
 * @method CallbackURL getCallback() 获取<p>新回调配置</p>
 * @method void setCallback(CallbackURL $Callback) 设置<p>新回调配置</p>
 */
class ModifyVLPlanRequest extends AbstractModel
{
    /**
     * @var string <p>计划 ID</p>
     */
    public $VLPlanId;

    /**
     * @var string <p>新计划名称</p>
     */
    public $Name;

    /**
     * @var string <p>新计划描述</p>
     */
    public $Describe;

    /**
     * @var string <p>新关联视觉理解模板 ID</p>
     */
    public $VLTemplateId;

    /**
     * @var integer <p>新存储天数，范围 [7, 1080]，0 表示不修改</p>
     */
    public $FileExpires;

    /**
     * @var CallbackURL <p>新回调配置</p>
     */
    public $Callback;

    /**
     * @param string $VLPlanId <p>计划 ID</p>
     * @param string $Name <p>新计划名称</p>
     * @param string $Describe <p>新计划描述</p>
     * @param string $VLTemplateId <p>新关联视觉理解模板 ID</p>
     * @param integer $FileExpires <p>新存储天数，范围 [7, 1080]，0 表示不修改</p>
     * @param CallbackURL $Callback <p>新回调配置</p>
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

        if (array_key_exists("FileExpires",$param) and $param["FileExpires"] !== null) {
            $this->FileExpires = $param["FileExpires"];
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = new CallbackURL();
            $this->Callback->deserialize($param["Callback"]);
        }
    }
}
