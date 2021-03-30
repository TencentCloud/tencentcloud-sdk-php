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
namespace TencentCloud\Ape\V20200513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片基础信息
 *
 * @method integer getImageId() 获取图片Id
 * @method void setImageId(integer $ImageId) 设置图片Id
 * @method integer getLicenseScopeId() 获取授权场景Id
 * @method void setLicenseScopeId(integer $LicenseScopeId) 设置授权场景Id
 * @method integer getDimensionsNameId() 获取尺寸名称Id
 * @method void setDimensionsNameId(integer $DimensionsNameId) 设置尺寸名称Id
 * @method string getUserId() 获取平台用户标识
 * @method void setUserId(string $UserId) 设置平台用户标识
 */
class ImageInfo extends AbstractModel
{
    /**
     * @var integer 图片Id
     */
    public $ImageId;

    /**
     * @var integer 授权场景Id
     */
    public $LicenseScopeId;

    /**
     * @var integer 尺寸名称Id
     */
    public $DimensionsNameId;

    /**
     * @var string 平台用户标识
     */
    public $UserId;

    /**
     * @param integer $ImageId 图片Id
     * @param integer $LicenseScopeId 授权场景Id
     * @param integer $DimensionsNameId 尺寸名称Id
     * @param string $UserId 平台用户标识
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("LicenseScopeId",$param) and $param["LicenseScopeId"] !== null) {
            $this->LicenseScopeId = $param["LicenseScopeId"];
        }

        if (array_key_exists("DimensionsNameId",$param) and $param["DimensionsNameId"] !== null) {
            $this->DimensionsNameId = $param["DimensionsNameId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
