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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageRegistryTimingScanTask返回参数结构体
 *
 * @method boolean getEnable() 获取定时扫描开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(boolean $Enable) 设置定时扫描开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanTime() 获取定时任务扫描时间
 * @method void setScanTime(string $ScanTime) 设置定时任务扫描时间
 * @method integer getScanPeriod() 获取定时扫描间隔
 * @method void setScanPeriod(integer $ScanPeriod) 设置定时扫描间隔
 * @method array getScanType() 获取扫描类型数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanType(array $ScanType) 设置扫描类型数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAll() 获取扫描全部镜像
 * @method void setAll(boolean $All) 设置扫描全部镜像
 * @method array getImages() 获取自定义扫描镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImages(array $Images) 设置自定义扫描镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getId() 获取自动以扫描镜像Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(array $Id) 设置自动以扫描镜像Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageRegistryTimingScanTaskResponse extends AbstractModel
{
    /**
     * @var boolean 定时扫描开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var string 定时任务扫描时间
     */
    public $ScanTime;

    /**
     * @var integer 定时扫描间隔
     */
    public $ScanPeriod;

    /**
     * @var array 扫描类型数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanType;

    /**
     * @var boolean 扫描全部镜像
     */
    public $All;

    /**
     * @var array 自定义扫描镜像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Images;

    /**
     * @var array 自动以扫描镜像Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Enable 定时扫描开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanTime 定时任务扫描时间
     * @param integer $ScanPeriod 定时扫描间隔
     * @param array $ScanType 扫描类型数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $All 扫描全部镜像
     * @param array $Images 自定义扫描镜像
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Id 自动以扫描镜像Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("ScanPeriod",$param) and $param["ScanPeriod"] !== null) {
            $this->ScanPeriod = $param["ScanPeriod"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new ImageInfo();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
