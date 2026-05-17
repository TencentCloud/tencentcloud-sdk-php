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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos存储桶详情信息
 *
 * @method integer getAppId() 获取appid信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置appid信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketName() 获取存储桶名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketName(string $BucketName) 设置存储桶名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketRegion() 获取地域信息
 * @method void setBucketRegion(string $BucketRegion) 设置地域信息
 * @method string getBucketRegionCode() 获取地域码值
 * @method void setBucketRegionCode(string $BucketRegionCode) 设置地域码值
 * @method string getBucketMarker() 获取备注
 * @method void setBucketMarker(string $BucketMarker) 设置备注
 */
class CosBucketInfo extends AbstractModel
{
    /**
     * @var integer appid信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 存储桶名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketName;

    /**
     * @var string 地域信息
     */
    public $BucketRegion;

    /**
     * @var string 地域码值
     */
    public $BucketRegionCode;

    /**
     * @var string 备注
     */
    public $BucketMarker;

    /**
     * @param integer $AppId appid信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketName 存储桶名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketRegion 地域信息
     * @param string $BucketRegionCode 地域码值
     * @param string $BucketMarker 备注
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("BucketRegionCode",$param) and $param["BucketRegionCode"] !== null) {
            $this->BucketRegionCode = $param["BucketRegionCode"];
        }

        if (array_key_exists("BucketMarker",$param) and $param["BucketMarker"] !== null) {
            $this->BucketMarker = $param["BucketMarker"];
        }
    }
}
