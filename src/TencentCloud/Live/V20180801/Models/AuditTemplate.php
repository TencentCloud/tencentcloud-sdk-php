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
 * 审核模板。
 *
 * @method integer getTemplateId() 获取<p>模板 ID 。<br>CreateAuditTemplate 时，此参数不传或传 0 。</p><p>ModifyAuditTemplate 时，此参数必传。</p>
 * @method void setTemplateId(integer $TemplateId) 设置<p>模板 ID 。<br>CreateAuditTemplate 时，此参数不传或传 0 。</p><p>ModifyAuditTemplate 时，此参数必传。</p>
 * @method string getTemplateName() 获取<p>模板名称。<br>CreateAuditTemplate 必填。</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>模板名称。<br>CreateAuditTemplate 必填。</p>
 * @method string getDescription() 获取<p>描述信息。<br>CreateAuditTemplate 必填。</p>
 * @method void setDescription(string $Description) 设置<p>描述信息。<br>CreateAuditTemplate 必填。</p>
 * @method string getCosBucket() 获取<p>Cos Bucket名称。<br>CreateAuditTemplate 必填。</p>
 * @method void setCosBucket(string $CosBucket) 设置<p>Cos Bucket名称。<br>CreateAuditTemplate 必填。</p>
 * @method string getCosRegion() 获取<p>Cos 地域。<br>CreateAuditTemplate 必填。</p>
 * @method void setCosRegion(string $CosRegion) 设置<p>Cos 地域。<br>CreateAuditTemplate 必填。</p>
 * @method string getCosFilePath() 获取<p>Cos 完整文件名（包括前缀）。CreateAuditTemplate 必填。</p>
 * @method void setCosFilePath(string $CosFilePath) 设置<p>Cos 完整文件名（包括前缀）。CreateAuditTemplate 必填。</p>
 * @method boolean getAuditImage() 获取<p>是否启用图片审核。<br>CreateAuditTemplate 必填。</p>
 * @method void setAuditImage(boolean $AuditImage) 设置<p>是否启用图片审核。<br>CreateAuditTemplate 必填。</p>
 * @method boolean getAuditAudio() 获取<p>是否启用音频审核。<br>CreateAuditTemplate 必填。</p>
 * @method void setAuditAudio(boolean $AuditAudio) 设置<p>是否启用音频审核。<br>CreateAuditTemplate 必填。</p>
 * @method integer getSnapshotInterval() 获取<p>截图间隔，1-60秒。<br>CreateAuditTemplate 必填。</p>
 * @method void setSnapshotInterval(integer $SnapshotInterval) 设置<p>截图间隔，1-60秒。<br>CreateAuditTemplate 必填。</p>
 * @method integer getAudioInterval() 获取<p>音频间隔，1-60秒。<br>CreateAuditTemplate 必填。</p>
 * @method void setAudioInterval(integer $AudioInterval) 设置<p>音频间隔，1-60秒。<br>CreateAuditTemplate 必填。</p>
 * @method boolean getEnableFailoverCos() 获取<p>是否开启 Cos 容灾。<br>CreateAuditTemplate 必填。</p>
 * @method void setEnableFailoverCos(boolean $EnableFailoverCos) 设置<p>是否开启 Cos 容灾。<br>CreateAuditTemplate 必填。</p>
 * @method string getFailoverCosBucket() 获取<p>容灾 Cos Bucket 。<br>CreateAuditTemplate 必填。</p>
 * @method void setFailoverCosBucket(string $FailoverCosBucket) 设置<p>容灾 Cos Bucket 。<br>CreateAuditTemplate 必填。</p>
 * @method string getFailoverCosRegion() 获取<p>容灾 Cos 地域。<br>CreateAuditTemplate 必填。</p>
 * @method void setFailoverCosRegion(string $FailoverCosRegion) 设置<p>容灾 Cos 地域。<br>CreateAuditTemplate 必填。</p>
 * @method array getSceneInfos() 获取<p>场景策略配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSceneInfos(array $SceneInfos) 设置<p>场景策略配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuditText() 获取<p>1：表示启用音频文本识别。0 ：不启用。默认 0 。</p>
 * @method void setAuditText(integer $AuditText) 设置<p>1：表示启用音频文本识别。0 ：不启用。默认 0 。</p>
 */
class AuditTemplate extends AbstractModel
{
    /**
     * @var integer <p>模板 ID 。<br>CreateAuditTemplate 时，此参数不传或传 0 。</p><p>ModifyAuditTemplate 时，此参数必传。</p>
     */
    public $TemplateId;

    /**
     * @var string <p>模板名称。<br>CreateAuditTemplate 必填。</p>
     */
    public $TemplateName;

    /**
     * @var string <p>描述信息。<br>CreateAuditTemplate 必填。</p>
     */
    public $Description;

    /**
     * @var string <p>Cos Bucket名称。<br>CreateAuditTemplate 必填。</p>
     */
    public $CosBucket;

    /**
     * @var string <p>Cos 地域。<br>CreateAuditTemplate 必填。</p>
     */
    public $CosRegion;

    /**
     * @var string <p>Cos 完整文件名（包括前缀）。CreateAuditTemplate 必填。</p>
     */
    public $CosFilePath;

    /**
     * @var boolean <p>是否启用图片审核。<br>CreateAuditTemplate 必填。</p>
     */
    public $AuditImage;

    /**
     * @var boolean <p>是否启用音频审核。<br>CreateAuditTemplate 必填。</p>
     */
    public $AuditAudio;

    /**
     * @var integer <p>截图间隔，1-60秒。<br>CreateAuditTemplate 必填。</p>
     */
    public $SnapshotInterval;

    /**
     * @var integer <p>音频间隔，1-60秒。<br>CreateAuditTemplate 必填。</p>
     */
    public $AudioInterval;

    /**
     * @var boolean <p>是否开启 Cos 容灾。<br>CreateAuditTemplate 必填。</p>
     */
    public $EnableFailoverCos;

    /**
     * @var string <p>容灾 Cos Bucket 。<br>CreateAuditTemplate 必填。</p>
     */
    public $FailoverCosBucket;

    /**
     * @var string <p>容灾 Cos 地域。<br>CreateAuditTemplate 必填。</p>
     */
    public $FailoverCosRegion;

    /**
     * @var array <p>场景策略配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SceneInfos;

    /**
     * @var integer <p>1：表示启用音频文本识别。0 ：不启用。默认 0 。</p>
     */
    public $AuditText;

    /**
     * @param integer $TemplateId <p>模板 ID 。<br>CreateAuditTemplate 时，此参数不传或传 0 。</p><p>ModifyAuditTemplate 时，此参数必传。</p>
     * @param string $TemplateName <p>模板名称。<br>CreateAuditTemplate 必填。</p>
     * @param string $Description <p>描述信息。<br>CreateAuditTemplate 必填。</p>
     * @param string $CosBucket <p>Cos Bucket名称。<br>CreateAuditTemplate 必填。</p>
     * @param string $CosRegion <p>Cos 地域。<br>CreateAuditTemplate 必填。</p>
     * @param string $CosFilePath <p>Cos 完整文件名（包括前缀）。CreateAuditTemplate 必填。</p>
     * @param boolean $AuditImage <p>是否启用图片审核。<br>CreateAuditTemplate 必填。</p>
     * @param boolean $AuditAudio <p>是否启用音频审核。<br>CreateAuditTemplate 必填。</p>
     * @param integer $SnapshotInterval <p>截图间隔，1-60秒。<br>CreateAuditTemplate 必填。</p>
     * @param integer $AudioInterval <p>音频间隔，1-60秒。<br>CreateAuditTemplate 必填。</p>
     * @param boolean $EnableFailoverCos <p>是否开启 Cos 容灾。<br>CreateAuditTemplate 必填。</p>
     * @param string $FailoverCosBucket <p>容灾 Cos Bucket 。<br>CreateAuditTemplate 必填。</p>
     * @param string $FailoverCosRegion <p>容灾 Cos 地域。<br>CreateAuditTemplate 必填。</p>
     * @param array $SceneInfos <p>场景策略配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuditText <p>1：表示启用音频文本识别。0 ：不启用。默认 0 。</p>
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

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("CosFilePath",$param) and $param["CosFilePath"] !== null) {
            $this->CosFilePath = $param["CosFilePath"];
        }

        if (array_key_exists("AuditImage",$param) and $param["AuditImage"] !== null) {
            $this->AuditImage = $param["AuditImage"];
        }

        if (array_key_exists("AuditAudio",$param) and $param["AuditAudio"] !== null) {
            $this->AuditAudio = $param["AuditAudio"];
        }

        if (array_key_exists("SnapshotInterval",$param) and $param["SnapshotInterval"] !== null) {
            $this->SnapshotInterval = $param["SnapshotInterval"];
        }

        if (array_key_exists("AudioInterval",$param) and $param["AudioInterval"] !== null) {
            $this->AudioInterval = $param["AudioInterval"];
        }

        if (array_key_exists("EnableFailoverCos",$param) and $param["EnableFailoverCos"] !== null) {
            $this->EnableFailoverCos = $param["EnableFailoverCos"];
        }

        if (array_key_exists("FailoverCosBucket",$param) and $param["FailoverCosBucket"] !== null) {
            $this->FailoverCosBucket = $param["FailoverCosBucket"];
        }

        if (array_key_exists("FailoverCosRegion",$param) and $param["FailoverCosRegion"] !== null) {
            $this->FailoverCosRegion = $param["FailoverCosRegion"];
        }

        if (array_key_exists("SceneInfos",$param) and $param["SceneInfos"] !== null) {
            $this->SceneInfos = [];
            foreach ($param["SceneInfos"] as $key => $value){
                $obj = new CMSSceneDetail();
                $obj->deserialize($value);
                array_push($this->SceneInfos, $obj);
            }
        }

        if (array_key_exists("AuditText",$param) and $param["AuditText"] !== null) {
            $this->AuditText = $param["AuditText"];
        }
    }
}
