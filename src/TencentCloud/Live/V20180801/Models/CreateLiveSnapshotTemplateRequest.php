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
 * @method string getTemplateName() 获取模板名称，非空的字符串。
长度上限：255字节。
 * @method void setTemplateName(string $TemplateName) 设置模板名称，非空的字符串。
长度上限：255字节。
 * @method integer getCosAppId() 获取Cos AppId。
 * @method void setCosAppId(integer $CosAppId) 设置Cos AppId。
 * @method string getCosBucket() 获取Cos Bucket名称。
 * @method void setCosBucket(string $CosBucket) 设置Cos Bucket名称。
 * @method string getCosRegion() 获取Cos地区。
 * @method void setCosRegion(string $CosRegion) 设置Cos地区。
 * @method string getDescription() 获取描述信息。
长度上限：1024字节。
 * @method void setDescription(string $Description) 设置描述信息。
长度上限：1024字节。
 * @method integer getSnapshotInterval() 获取截图间隔，单位s，默认10s。
范围： 5s ~ 600s。
 * @method void setSnapshotInterval(integer $SnapshotInterval) 设置截图间隔，单位s，默认10s。
范围： 5s ~ 600s。
 * @method integer getWidth() 获取截图宽度。默认：0（原始宽）。
 * @method void setWidth(integer $Width) 设置截图宽度。默认：0（原始宽）。
 * @method integer getHeight() 获取截图高度。默认：0（原始高）。
 * @method void setHeight(integer $Height) 设置截图高度。默认：0（原始高）。
 * @method integer getPornFlag() 获取是否开启鉴黄，0：不开启，1：开启。默认：0。
 * @method void setPornFlag(integer $PornFlag) 设置是否开启鉴黄，0：不开启，1：开启。默认：0。
 */

/**
 *CreateLiveSnapshotTemplate请求参数结构体
 */
class CreateLiveSnapshotTemplateRequest extends AbstractModel
{
    /**
     * @var string 模板名称，非空的字符串。
长度上限：255字节。
     */
    public $TemplateName;

    /**
     * @var integer Cos AppId。
     */
    public $CosAppId;

    /**
     * @var string Cos Bucket名称。
     */
    public $CosBucket;

    /**
     * @var string Cos地区。
     */
    public $CosRegion;

    /**
     * @var string 描述信息。
长度上限：1024字节。
     */
    public $Description;

    /**
     * @var integer 截图间隔，单位s，默认10s。
范围： 5s ~ 600s。
     */
    public $SnapshotInterval;

    /**
     * @var integer 截图宽度。默认：0（原始宽）。
     */
    public $Width;

    /**
     * @var integer 截图高度。默认：0（原始高）。
     */
    public $Height;

    /**
     * @var integer 是否开启鉴黄，0：不开启，1：开启。默认：0。
     */
    public $PornFlag;
    /**
     * @param string $TemplateName 模板名称，非空的字符串。
长度上限：255字节。
     * @param integer $CosAppId Cos AppId。
     * @param string $CosBucket Cos Bucket名称。
     * @param string $CosRegion Cos地区。
     * @param string $Description 描述信息。
长度上限：1024字节。
     * @param integer $SnapshotInterval 截图间隔，单位s，默认10s。
范围： 5s ~ 600s。
     * @param integer $Width 截图宽度。默认：0（原始宽）。
     * @param integer $Height 截图高度。默认：0（原始高）。
     * @param integer $PornFlag 是否开启鉴黄，0：不开启，1：开启。默认：0。
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
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
    }
}
