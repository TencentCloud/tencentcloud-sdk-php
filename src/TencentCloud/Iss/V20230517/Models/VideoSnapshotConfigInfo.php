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
 * 截图配置信息
 *
 * @method string getConfigId() 获取<p>截图配置Id</p>
 * @method void setConfigId(string $ConfigId) 设置<p>截图配置Id</p>
 * @method string getName() 获取<p>截图配置名称</p>
 * @method void setName(string $Name) 设置<p>截图配置名称</p>
 * @method string getTemplateId() 获取<p>截图模板Id</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>截图模板Id</p>
 * @method string getTemplateName() 获取<p>截图模板名称</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>截图模板名称</p>
 * @method integer getType() 获取<p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
 * @method void setType(integer $Type) 设置<p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
 * @method integer getFileExpires() 获取<p>图片存储天数</p><p>单位：天</p>
 * @method void setFileExpires(integer $FileExpires) 设置<p>图片存储天数</p><p>单位：天</p>
 * @method CallbackURL getCallback() 获取<p>回调配置</p>
 * @method void setCallback(CallbackURL $Callback) 设置<p>回调配置</p>
 * @method integer getRelatedChannelCount() 获取<p>截图配置关联的通道数</p>
 * @method void setRelatedChannelCount(integer $RelatedChannelCount) 设置<p>截图配置关联的通道数</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>最近一次更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最近一次更新时间</p>
 */
class VideoSnapshotConfigInfo extends AbstractModel
{
    /**
     * @var string <p>截图配置Id</p>
     */
    public $ConfigId;

    /**
     * @var string <p>截图配置名称</p>
     */
    public $Name;

    /**
     * @var string <p>截图模板Id</p>
     */
    public $TemplateId;

    /**
     * @var string <p>截图模板名称</p>
     */
    public $TemplateName;

    /**
     * @var integer <p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>图片存储天数</p><p>单位：天</p>
     */
    public $FileExpires;

    /**
     * @var CallbackURL <p>回调配置</p>
     */
    public $Callback;

    /**
     * @var integer <p>截图配置关联的通道数</p>
     */
    public $RelatedChannelCount;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最近一次更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param string $ConfigId <p>截图配置Id</p>
     * @param string $Name <p>截图配置名称</p>
     * @param string $TemplateId <p>截图模板Id</p>
     * @param string $TemplateName <p>截图模板名称</p>
     * @param integer $Type <p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
     * @param integer $FileExpires <p>图片存储天数</p><p>单位：天</p>
     * @param CallbackURL $Callback <p>回调配置</p>
     * @param integer $RelatedChannelCount <p>截图配置关联的通道数</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>最近一次更新时间</p>
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FileExpires",$param) and $param["FileExpires"] !== null) {
            $this->FileExpires = $param["FileExpires"];
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = new CallbackURL();
            $this->Callback->deserialize($param["Callback"]);
        }

        if (array_key_exists("RelatedChannelCount",$param) and $param["RelatedChannelCount"] !== null) {
            $this->RelatedChannelCount = $param["RelatedChannelCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
