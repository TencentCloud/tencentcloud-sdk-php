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
 * 直播垫片模板。
 *
 * @method integer getTemplateId() 获取<p>模板id。</p>
 * @method void setTemplateId(integer $TemplateId) 设置<p>模板id。</p>
 * @method string getTemplateName() 获取<p>模板名称。</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>模板名称。</p>
 * @method string getUrl() 获取<p>垫片内容。</p>
 * @method void setUrl(string $Url) 设置<p>垫片内容。</p>
 * @method string getCreateTime() 获取<p>模板创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>模板创建时间。</p>
 * @method string getUpdateTime() 获取<p>模板修改时间。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>模板修改时间。</p>
 * @method string getDescription() 获取<p>模板描述。</p>
 * @method void setDescription(string $Description) 设置<p>模板描述。</p>
 * @method integer getWaitDuration() 获取<p>断流等待时间。<br>取值范围：0-30000。<br>单位：ms。</p>
 * @method void setWaitDuration(integer $WaitDuration) 设置<p>断流等待时间。<br>取值范围：0-30000。<br>单位：ms。</p>
 * @method integer getMaxDuration() 获取<p>最大垫片时长。<br>取值范围：0 - 正无穷。<br>单位：ms。</p>
 * @method void setMaxDuration(integer $MaxDuration) 设置<p>最大垫片时长。<br>取值范围：0 - 正无穷。<br>单位：ms。</p>
 * @method integer getType() 获取<p>垫片内容类型： 1：图片，2：视频。 默认值：1。</p>
 * @method void setType(integer $Type) 设置<p>垫片内容类型： 1：图片，2：视频。 默认值：1。</p>
 * @method integer getTriggerCondition() 获取<p>断流垫片触发条件</p><p>枚举值：</p><ul><li>0： 主动及异常断流</li><li>1： 异常断流</li></ul><p>默认值：0</p>
 * @method void setTriggerCondition(integer $TriggerCondition) 设置<p>断流垫片触发条件</p><p>枚举值：</p><ul><li>0： 主动及异常断流</li><li>1： 异常断流</li></ul><p>默认值：0</p>
 */
class PadTemplate extends AbstractModel
{
    /**
     * @var integer <p>模板id。</p>
     */
    public $TemplateId;

    /**
     * @var string <p>模板名称。</p>
     */
    public $TemplateName;

    /**
     * @var string <p>垫片内容。</p>
     */
    public $Url;

    /**
     * @var string <p>模板创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>模板修改时间。</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>模板描述。</p>
     */
    public $Description;

    /**
     * @var integer <p>断流等待时间。<br>取值范围：0-30000。<br>单位：ms。</p>
     */
    public $WaitDuration;

    /**
     * @var integer <p>最大垫片时长。<br>取值范围：0 - 正无穷。<br>单位：ms。</p>
     */
    public $MaxDuration;

    /**
     * @var integer <p>垫片内容类型： 1：图片，2：视频。 默认值：1。</p>
     */
    public $Type;

    /**
     * @var integer <p>断流垫片触发条件</p><p>枚举值：</p><ul><li>0： 主动及异常断流</li><li>1： 异常断流</li></ul><p>默认值：0</p>
     */
    public $TriggerCondition;

    /**
     * @param integer $TemplateId <p>模板id。</p>
     * @param string $TemplateName <p>模板名称。</p>
     * @param string $Url <p>垫片内容。</p>
     * @param string $CreateTime <p>模板创建时间。</p>
     * @param string $UpdateTime <p>模板修改时间。</p>
     * @param string $Description <p>模板描述。</p>
     * @param integer $WaitDuration <p>断流等待时间。<br>取值范围：0-30000。<br>单位：ms。</p>
     * @param integer $MaxDuration <p>最大垫片时长。<br>取值范围：0 - 正无穷。<br>单位：ms。</p>
     * @param integer $Type <p>垫片内容类型： 1：图片，2：视频。 默认值：1。</p>
     * @param integer $TriggerCondition <p>断流垫片触发条件</p><p>枚举值：</p><ul><li>0： 主动及异常断流</li><li>1： 异常断流</li></ul><p>默认值：0</p>
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("WaitDuration",$param) and $param["WaitDuration"] !== null) {
            $this->WaitDuration = $param["WaitDuration"];
        }

        if (array_key_exists("MaxDuration",$param) and $param["MaxDuration"] !== null) {
            $this->MaxDuration = $param["MaxDuration"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TriggerCondition",$param) and $param["TriggerCondition"] !== null) {
            $this->TriggerCondition = $param["TriggerCondition"];
        }
    }
}
