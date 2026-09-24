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
 * CreateLiveSmartEraseTemplate请求参数结构体
 *
 * @method string getTemplateName() 获取<p>模板名称。长度上限：100字节。</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>模板名称。长度上限：100字节。</p>
 * @method string getType() 获取<p>擦除类型，如&quot;illegal audio|illegal image|logo|privacy protection 。</p>
 * @method void setType(string $Type) 设置<p>擦除类型，如&quot;illegal audio|illegal image|logo|privacy protection 。</p>
 * @method string getDescription() 获取<p>描述信息。<br>长度上限：1024字节。<br>仅支持中文、英文、数字、_、-。</p>
 * @method void setDescription(string $Description) 设置<p>描述信息。<br>长度上限：1024字节。<br>仅支持中文、英文、数字、_、-。</p>
 * @method integer getAuditConfId() 获取<p>关联的审核模板id, 表audio_conf 。</p><p>取值为DescribeAuditTemplates接口返回的AuditTemplates里面的TemplateId字段</p>
 * @method void setAuditConfId(integer $AuditConfId) 设置<p>关联的审核模板id, 表audio_conf 。</p><p>取值为DescribeAuditTemplates接口返回的AuditTemplates里面的TemplateId字段</p>
 * @method string getImageBizType() 获取<p>天御图片审核策略BizType  Image 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;Image&quot;的BizType值</p>
 * @method void setImageBizType(string $ImageBizType) 设置<p>天御图片审核策略BizType  Image 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;Image&quot;的BizType值</p>
 * @method string getAudioBizType() 获取<p>天御音频审核策略BizType  ShortAudio 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;ShortAudio&quot;的BizType值</p>
 * @method void setAudioBizType(string $AudioBizType) 设置<p>天御音频审核策略BizType  ShortAudio 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;ShortAudio&quot;的BizType值</p>
 * @method string getAudioTextBizType() 获取<p>天御音频文本审核策略BizType  ShortAudio 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;Text&quot;的BizType值</p>
 * @method void setAudioTextBizType(string $AudioTextBizType) 设置<p>天御音频文本审核策略BizType  ShortAudio 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;Text&quot;的BizType值</p>
 * @method integer getDisplayMode() 获取<p>展示模式，取值 1:延时稳态展示; 3.实时动态展示。默认1 。</p>
 * @method void setDisplayMode(integer $DisplayMode) 设置<p>展示模式，取值 1:延时稳态展示; 3.实时动态展示。默认1 。</p>
 * @method integer getDisplayDelayTime() 获取<p>字幕延迟展示时间,单位毫秒。默认10000。</p>
 * @method void setDisplayDelayTime(integer $DisplayDelayTime) 设置<p>字幕延迟展示时间,单位毫秒。默认10000。</p>
 * @method string getPrivacyProtection() 获取<p>隐私保护可选的类型名，包括人脸模糊、车牌模糊</p><p>枚举值：</p><ul><li>blur face： 人脸模糊</li><li>blur license plate： 车牌模糊</li><li>blur face|blur license plate： 复选</li></ul>
 * @method void setPrivacyProtection(string $PrivacyProtection) 设置<p>隐私保护可选的类型名，包括人脸模糊、车牌模糊</p><p>枚举值：</p><ul><li>blur face： 人脸模糊</li><li>blur license plate： 车牌模糊</li><li>blur face|blur license plate： 复选</li></ul>
 * @method integer getAudioErasureMode() 获取<p>音频处理可选项：静音擦除、哔音擦除，默认选择静音擦除</p><p>枚举值：</p><ul><li>0： 静音</li><li>1： 哔音</li></ul><p>默认值：0</p>
 * @method void setAudioErasureMode(integer $AudioErasureMode) 设置<p>音频处理可选项：静音擦除、哔音擦除，默认选择静音擦除</p><p>枚举值：</p><ul><li>0： 静音</li><li>1： 哔音</li></ul><p>默认值：0</p>
 */
class CreateLiveSmartEraseTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>模板名称。长度上限：100字节。</p>
     */
    public $TemplateName;

    /**
     * @var string <p>擦除类型，如&quot;illegal audio|illegal image|logo|privacy protection 。</p>
     */
    public $Type;

    /**
     * @var string <p>描述信息。<br>长度上限：1024字节。<br>仅支持中文、英文、数字、_、-。</p>
     */
    public $Description;

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
     * @var integer <p>展示模式，取值 1:延时稳态展示; 3.实时动态展示。默认1 。</p>
     */
    public $DisplayMode;

    /**
     * @var integer <p>字幕延迟展示时间,单位毫秒。默认10000。</p>
     */
    public $DisplayDelayTime;

    /**
     * @var string <p>隐私保护可选的类型名，包括人脸模糊、车牌模糊</p><p>枚举值：</p><ul><li>blur face： 人脸模糊</li><li>blur license plate： 车牌模糊</li><li>blur face|blur license plate： 复选</li></ul>
     */
    public $PrivacyProtection;

    /**
     * @var integer <p>音频处理可选项：静音擦除、哔音擦除，默认选择静音擦除</p><p>枚举值：</p><ul><li>0： 静音</li><li>1： 哔音</li></ul><p>默认值：0</p>
     */
    public $AudioErasureMode;

    /**
     * @param string $TemplateName <p>模板名称。长度上限：100字节。</p>
     * @param string $Type <p>擦除类型，如&quot;illegal audio|illegal image|logo|privacy protection 。</p>
     * @param string $Description <p>描述信息。<br>长度上限：1024字节。<br>仅支持中文、英文、数字、_、-。</p>
     * @param integer $AuditConfId <p>关联的审核模板id, 表audio_conf 。</p><p>取值为DescribeAuditTemplates接口返回的AuditTemplates里面的TemplateId字段</p>
     * @param string $ImageBizType <p>天御图片审核策略BizType  Image 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;Image&quot;的BizType值</p>
     * @param string $AudioBizType <p>天御音频审核策略BizType  ShortAudio 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;ShortAudio&quot;的BizType值</p>
     * @param string $AudioTextBizType <p>天御音频文本审核策略BizType  ShortAudio 。</p><p>取值为DescribeAuditTemplates返回的SceneInfos下BizInfos里面的对应的StrategyType为&quot;Text&quot;的BizType值</p>
     * @param integer $DisplayMode <p>展示模式，取值 1:延时稳态展示; 3.实时动态展示。默认1 。</p>
     * @param integer $DisplayDelayTime <p>字幕延迟展示时间,单位毫秒。默认10000。</p>
     * @param string $PrivacyProtection <p>隐私保护可选的类型名，包括人脸模糊、车牌模糊</p><p>枚举值：</p><ul><li>blur face： 人脸模糊</li><li>blur license plate： 车牌模糊</li><li>blur face|blur license plate： 复选</li></ul>
     * @param integer $AudioErasureMode <p>音频处理可选项：静音擦除、哔音擦除，默认选择静音擦除</p><p>枚举值：</p><ul><li>0： 静音</li><li>1： 哔音</li></ul><p>默认值：0</p>
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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
