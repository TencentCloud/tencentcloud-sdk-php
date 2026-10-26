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
 * ModifyLiveSnapshotTemplate请求参数结构体
 *
 * @method integer getTemplateId() 获取<p>模板 ID。</p>
 * @method void setTemplateId(integer $TemplateId) 设置<p>模板 ID。</p>
 * @method integer getCosAppId() 获取<p>Cos 应用 ID。<br><strong>注：此参数现在须必选。</strong></p>
 * @method void setCosAppId(integer $CosAppId) 设置<p>Cos 应用 ID。<br><strong>注：此参数现在须必选。</strong></p>
 * @method string getCosBucket() 获取<p>Cos Bucket名称。<br>注：CosBucket参数值不能包含-[appid] 部分。<br><strong>注：此参数现在须必选。</strong></p>
 * @method void setCosBucket(string $CosBucket) 设置<p>Cos Bucket名称。<br>注：CosBucket参数值不能包含-[appid] 部分。<br><strong>注：此参数现在须必选。</strong></p>
 * @method string getCosRegion() 获取<p>Cos 地域。<br><strong>注：此参数现在须必选。</strong></p>
 * @method void setCosRegion(string $CosRegion) 设置<p>Cos 地域。<br><strong>注：此参数现在须必选。</strong></p>
 * @method string getTemplateName() 获取<p>模板名称。<br>长度上限：255字节。</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>模板名称。<br>长度上限：255字节。</p>
 * @method string getDescription() 获取<p>描述信息。<br>长度上限：1024字节。</p>
 * @method void setDescription(string $Description) 设置<p>描述信息。<br>长度上限：1024字节。</p>
 * @method integer getSnapshotInterval() 获取<p>截图间隔，单位s，默认10s。<br>范围： 5s ~ 300s。</p>
 * @method void setSnapshotInterval(integer $SnapshotInterval) 设置<p>截图间隔，单位s，默认10s。<br>范围： 5s ~ 300s。</p>
 * @method integer getWidth() 获取<p>截图宽度。默认：0（原始宽）。</p>
 * @method void setWidth(integer $Width) 设置<p>截图宽度。默认：0（原始宽）。</p>
 * @method integer getHeight() 获取<p>截图高度。默认：0（原始高）。</p>
 * @method void setHeight(integer $Height) 设置<p>截图高度。默认：0（原始高）。</p>
 * @method integer getPornFlag() 获取<p>是否开启鉴黄，默认 0 。<br>0：不开启。<br>1：开启。</p>
 * @method void setPornFlag(integer $PornFlag) 设置<p>是否开启鉴黄，默认 0 。<br>0：不开启。<br>1：开启。</p>
 * @method string getCosPrefix() 获取<p>Cos Bucket文件夹前缀。</p>
 * @method void setCosPrefix(string $CosPrefix) 设置<p>Cos Bucket文件夹前缀。</p>
 * @method string getCosFileName() 获取<p>Cos 文件名称。</p>
 * @method void setCosFileName(string $CosFileName) 设置<p>Cos 文件名称。</p>
 */
class ModifyLiveSnapshotTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p>模板 ID。</p>
     */
    public $TemplateId;

    /**
     * @var integer <p>Cos 应用 ID。<br><strong>注：此参数现在须必选。</strong></p>
     */
    public $CosAppId;

    /**
     * @var string <p>Cos Bucket名称。<br>注：CosBucket参数值不能包含-[appid] 部分。<br><strong>注：此参数现在须必选。</strong></p>
     */
    public $CosBucket;

    /**
     * @var string <p>Cos 地域。<br><strong>注：此参数现在须必选。</strong></p>
     */
    public $CosRegion;

    /**
     * @var string <p>模板名称。<br>长度上限：255字节。</p>
     */
    public $TemplateName;

    /**
     * @var string <p>描述信息。<br>长度上限：1024字节。</p>
     */
    public $Description;

    /**
     * @var integer <p>截图间隔，单位s，默认10s。<br>范围： 5s ~ 300s。</p>
     */
    public $SnapshotInterval;

    /**
     * @var integer <p>截图宽度。默认：0（原始宽）。</p>
     */
    public $Width;

    /**
     * @var integer <p>截图高度。默认：0（原始高）。</p>
     */
    public $Height;

    /**
     * @var integer <p>是否开启鉴黄，默认 0 。<br>0：不开启。<br>1：开启。</p>
     */
    public $PornFlag;

    /**
     * @var string <p>Cos Bucket文件夹前缀。</p>
     */
    public $CosPrefix;

    /**
     * @var string <p>Cos 文件名称。</p>
     */
    public $CosFileName;

    /**
     * @param integer $TemplateId <p>模板 ID。</p>
     * @param integer $CosAppId <p>Cos 应用 ID。<br><strong>注：此参数现在须必选。</strong></p>
     * @param string $CosBucket <p>Cos Bucket名称。<br>注：CosBucket参数值不能包含-[appid] 部分。<br><strong>注：此参数现在须必选。</strong></p>
     * @param string $CosRegion <p>Cos 地域。<br><strong>注：此参数现在须必选。</strong></p>
     * @param string $TemplateName <p>模板名称。<br>长度上限：255字节。</p>
     * @param string $Description <p>描述信息。<br>长度上限：1024字节。</p>
     * @param integer $SnapshotInterval <p>截图间隔，单位s，默认10s。<br>范围： 5s ~ 300s。</p>
     * @param integer $Width <p>截图宽度。默认：0（原始宽）。</p>
     * @param integer $Height <p>截图高度。默认：0（原始高）。</p>
     * @param integer $PornFlag <p>是否开启鉴黄，默认 0 。<br>0：不开启。<br>1：开启。</p>
     * @param string $CosPrefix <p>Cos Bucket文件夹前缀。</p>
     * @param string $CosFileName <p>Cos 文件名称。</p>
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

        if (array_key_exists("CosAppId",$param) and $param["CosAppId"] !== null) {
            $this->CosAppId = $param["CosAppId"];
        }

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SnapshotInterval",$param) and $param["SnapshotInterval"] !== null) {
            $this->SnapshotInterval = $param["SnapshotInterval"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("PornFlag",$param) and $param["PornFlag"] !== null) {
            $this->PornFlag = $param["PornFlag"];
        }

        if (array_key_exists("CosPrefix",$param) and $param["CosPrefix"] !== null) {
            $this->CosPrefix = $param["CosPrefix"];
        }

        if (array_key_exists("CosFileName",$param) and $param["CosFileName"] !== null) {
            $this->CosFileName = $param["CosFileName"];
        }
    }
}
