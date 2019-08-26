<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method integer getTemplateId() 获取模板Id。
 * @method void setTemplateId(integer $TemplateId) 设置模板Id。
 * @method string getTemplateName() 获取模板名称。
 * @method void setTemplateName(string $TemplateName) 设置模板名称。
 * @method integer getSnapshotInterval() 获取截图时间间隔。5-300秒。
 * @method void setSnapshotInterval(integer $SnapshotInterval) 设置截图时间间隔。5-300秒。
 * @method integer getWidth() 获取截图宽度。0-3000 0原始宽度并适配原始比例
 * @method void setWidth(integer $Width) 设置截图宽度。0-3000 0原始宽度并适配原始比例
 * @method integer getHeight() 获取截图高度。0-2000 0原始高度并适配原始比例
 * @method void setHeight(integer $Height) 设置截图高度。0-2000 0原始高度并适配原始比例
 * @method integer getPornFlag() 获取是否开启鉴黄，0：不开启，1：开启。
 * @method void setPornFlag(integer $PornFlag) 设置是否开启鉴黄，0：不开启，1：开启。
 * @method integer getCosAppId() 获取Cos AppId。
 * @method void setCosAppId(integer $CosAppId) 设置Cos AppId。
 * @method string getCosBucket() 获取Cos Bucket名称。
 * @method void setCosBucket(string $CosBucket) 设置Cos Bucket名称。
 * @method string getCosRegion() 获取Cos 地域。
 * @method void setCosRegion(string $CosRegion) 设置Cos 地域。
 * @method string getDescription() 获取模板描述
 * @method void setDescription(string $Description) 设置模板描述
 */

/**
 *截图模板信息
 */
class SnapshotTemplateInfo extends AbstractModel
{
    /**
     * @var integer 模板Id。
     */
    public $TemplateId;

    /**
     * @var string 模板名称。
     */
    public $TemplateName;

    /**
     * @var integer 截图时间间隔。5-300秒。
     */
    public $SnapshotInterval;

    /**
     * @var integer 截图宽度。0-3000 0原始宽度并适配原始比例
     */
    public $Width;

    /**
     * @var integer 截图高度。0-2000 0原始高度并适配原始比例
     */
    public $Height;

    /**
     * @var integer 是否开启鉴黄，0：不开启，1：开启。
     */
    public $PornFlag;

    /**
     * @var integer Cos AppId。
     */
    public $CosAppId;

    /**
     * @var string Cos Bucket名称。
     */
    public $CosBucket;

    /**
     * @var string Cos 地域。
     */
    public $CosRegion;

    /**
     * @var string 模板描述
     */
    public $Description;
    /**
     * @param integer $TemplateId 模板Id。
     * @param string $TemplateName 模板名称。
     * @param integer $SnapshotInterval 截图时间间隔。5-300秒。
     * @param integer $Width 截图宽度。0-3000 0原始宽度并适配原始比例
     * @param integer $Height 截图高度。0-2000 0原始高度并适配原始比例
     * @param integer $PornFlag 是否开启鉴黄，0：不开启，1：开启。
     * @param integer $CosAppId Cos AppId。
     * @param string $CosBucket Cos Bucket名称。
     * @param string $CosRegion Cos 地域。
     * @param string $Description 模板描述
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("CosAppId",$param) and $param["CosAppId"] !== null) {
            $this->CosAppId = $param["CosAppId"];
        }

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
