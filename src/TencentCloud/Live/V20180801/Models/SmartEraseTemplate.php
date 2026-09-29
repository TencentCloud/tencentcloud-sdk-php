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
 * 直播智能擦除模板。
 *
 * @method integer getTemplateId() 获取<p>模板id。</p>
 * @method void setTemplateId(integer $TemplateId) 设置<p>模板id。</p>
 * @method string getTemplateName() 获取<p>模板名称。</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>模板名称。</p>
 * @method string getDescription() 获取<p>模板描述。</p>
 * @method void setDescription(string $Description) 设置<p>模板描述。</p>
 * @method string getType() 获取<p>擦除类型，如&quot;illegal audio|illegal image|logo|privacy protection 。</p>
 * @method void setType(string $Type) 设置<p>擦除类型，如&quot;illegal audio|illegal image|logo|privacy protection 。</p>
 * @method integer getAuditConfId() 获取<p>关联的审核模板id, 表audio_conf 。</p><p>取值为DescribeAuditTemplates接口返回的AuditTemplates里面的TemplateId字段</p>
 * @method void setAuditConfId(integer $AuditConfId) 设置<p>关联的审核模板id, 表audio_conf 。</p><p>取值为DescribeAuditTemplates接口返回的AuditTemplates里面的TemplateId字段</p>
 * @method string getImageBizType() 获取<p>天御图片审核策略BizType  Image 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;Image&quot;的BizType值</p>
 * @method void setImageBizType(string $ImageBizType) 设置<p>天御图片审核策略BizType  Image 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;Image&quot;的BizType值</p>
 * @method string getAudioBizType() 获取<p>天御音频审核策略BizType  ShortAudio 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;ShortAudio&quot;的BizType值</p>
 * @method void setAudioBizType(string $AudioBizType) 设置<p>天御音频审核策略BizType  ShortAudio 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;ShortAudio&quot;的BizType值</p>
 * @method string getAudioTextBizType() 获取<p>天御音频文本审核策略BizType  ShortAudio 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;Text&quot;的BizType值</p>
 * @method void setAudioTextBizType(string $AudioTextBizType) 设置<p>天御音频文本审核策略BizType  ShortAudio 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;Text&quot;的BizType值</p>
 * @method string getCreateTime() 获取<p>模板创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>模板创建时间。</p>
 * @method string getUpdateTime() 获取<p>模板修改时间。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>模板修改时间。</p>
 * @method integer getDisplayMode() 获取<p>展示模式，取值 1:延时稳态展示; 3.实时动态展示。默认1 。</p>
 * @method void setDisplayMode(integer $DisplayMode) 设置<p>展示模式，取值 1:延时稳态展示; 3.实时动态展示。默认1 。</p>
 * @method integer getDisplayDelayTime() 获取<p>字幕延迟展示时间,单位毫秒。默认10000。</p>
 * @method void setDisplayDelayTime(integer $DisplayDelayTime) 设置<p>字幕延迟展示时间,单位毫秒。默认10000。</p>
 * @method string getPrivacyProtection() 获取<p>仅当擦除类型选择了违规音频，该项可见</p><p>枚举值：</p><ul><li>blur face： 人脸模糊</li><li>blur license plate： 车牌模糊</li></ul>
 * @method void setPrivacyProtection(string $PrivacyProtection) 设置<p>仅当擦除类型选择了违规音频，该项可见</p><p>枚举值：</p><ul><li>blur face： 人脸模糊</li><li>blur license plate： 车牌模糊</li></ul>
 * @method integer getAudioErasureMode() 获取<p>仅当擦除类型选择了“隐私保护”后，该项可见</p><p>枚举值：</p><ul><li>0： 静音</li><li>1： 哔音</li></ul>
 * @method void setAudioErasureMode(integer $AudioErasureMode) 设置<p>仅当擦除类型选择了“隐私保护”后，该项可见</p><p>枚举值：</p><ul><li>0： 静音</li><li>1： 哔音</li></ul>
 */
class SmartEraseTemplate extends AbstractModel
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
     * @var string <p>模板描述。</p>
     */
    public $Description;

    /**
     * @var string <p>擦除类型，如&quot;illegal audio|illegal image|logo|privacy protection 。</p>
     */
    public $Type;

    /**
     * @var integer <p>关联的审核模板id, 表audio_conf 。</p><p>取值为DescribeAuditTemplates接口返回的AuditTemplates里面的TemplateId字段</p>
     */
    public $AuditConfId;

    /**
     * @var string <p>天御图片审核策略BizType  Image 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;Image&quot;的BizType值</p>
     */
    public $ImageBizType;

    /**
     * @var string <p>天御音频审核策略BizType  ShortAudio 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;ShortAudio&quot;的BizType值</p>
     */
    public $AudioBizType;

    /**
     * @var string <p>天御音频文本审核策略BizType  ShortAudio 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;Text&quot;的BizType值</p>
     */
    public $AudioTextBizType;

    /**
     * @var string <p>模板创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>模板修改时间。</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>展示模式，取值 1:延时稳态展示; 3.实时动态展示。默认1 。</p>
     */
    public $DisplayMode;

    /**
     * @var integer <p>字幕延迟展示时间,单位毫秒。默认10000。</p>
     */
    public $DisplayDelayTime;

    /**
     * @var string <p>仅当擦除类型选择了违规音频，该项可见</p><p>枚举值：</p><ul><li>blur face： 人脸模糊</li><li>blur license plate： 车牌模糊</li></ul>
     */
    public $PrivacyProtection;

    /**
     * @var integer <p>仅当擦除类型选择了“隐私保护”后，该项可见</p><p>枚举值：</p><ul><li>0： 静音</li><li>1： 哔音</li></ul>
     */
    public $AudioErasureMode;

    /**
     * @param integer $TemplateId <p>模板id。</p>
     * @param string $TemplateName <p>模板名称。</p>
     * @param string $Description <p>模板描述。</p>
     * @param string $Type <p>擦除类型，如&quot;illegal audio|illegal image|logo|privacy protection 。</p>
     * @param integer $AuditConfId <p>关联的审核模板id, 表audio_conf 。</p><p>取值为DescribeAuditTemplates接口返回的AuditTemplates里面的TemplateId字段</p>
     * @param string $ImageBizType <p>天御图片审核策略BizType  Image 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;Image&quot;的BizType值</p>
     * @param string $AudioBizType <p>天御音频审核策略BizType  ShortAudio 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;ShortAudio&quot;的BizType值</p>
     * @param string $AudioTextBizType <p>天御音频文本审核策略BizType  ShortAudio 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;Text&quot;的BizType值</p>
     * @param string $CreateTime <p>模板创建时间。</p>
     * @param string $UpdateTime <p>模板修改时间。</p>
     * @param integer $DisplayMode <p>展示模式，取值 1:延时稳态展示; 3.实时动态展示。默认1 。</p>
     * @param integer $DisplayDelayTime <p>字幕延迟展示时间,单位毫秒。默认10000。</p>
     * @param string $PrivacyProtection <p>仅当擦除类型选择了违规音频，该项可见</p><p>枚举值：</p><ul><li>blur face： 人脸模糊</li><li>blur license plate： 车牌模糊</li></ul>
     * @param integer $AudioErasureMode <p>仅当擦除类型选择了“隐私保护”后，该项可见</p><p>枚举值：</p><ul><li>0： 静音</li><li>1： 哔音</li></ul>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AuditConfId",$param) and $param["AuditConfId"] !== null) {
            $this->AuditConfId = $param["AuditConfId"];
        }

        if (array_key_exists("ImageBizType",$param) and $param["ImageBizType"] !== null) {
            $this->ImageBizType = $param["ImageBizType"];
        }

        if (array_key_exists("AudioBizType",$param) and $param["AudioBizType"] !== null) {
            $this->AudioBizType = $param["AudioBizType"];
        }

        if (array_key_exists("AudioTextBizType",$param) and $param["AudioTextBizType"] !== null) {
            $this->AudioTextBizType = $param["AudioTextBizType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DisplayMode",$param) and $param["DisplayMode"] !== null) {
            $this->DisplayMode = $param["DisplayMode"];
        }

        if (array_key_exists("DisplayDelayTime",$param) and $param["DisplayDelayTime"] !== null) {
            $this->DisplayDelayTime = $param["DisplayDelayTime"];
        }

        if (array_key_exists("PrivacyProtection",$param) and $param["PrivacyProtection"] !== null) {
            $this->PrivacyProtection = $param["PrivacyProtection"];
        }

        if (array_key_exists("AudioErasureMode",$param) and $param["AudioErasureMode"] !== null) {
            $this->AudioErasureMode = $param["AudioErasureMode"];
        }
    }
}
