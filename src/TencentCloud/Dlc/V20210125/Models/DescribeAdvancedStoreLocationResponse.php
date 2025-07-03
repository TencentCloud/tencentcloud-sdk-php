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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAdvancedStoreLocation返回参数结构体
 *
 * @method integer getEnable() 获取是否启用高级设置：0-否，1-是
 * @method void setEnable(integer $Enable) 设置是否启用高级设置：0-否，1-是
 * @method string getStoreLocation() 获取查询结果保存cos路径
 * @method void setStoreLocation(string $StoreLocation) 设置查询结果保存cos路径
 * @method boolean getHasLakeFs() 获取是否有托管存储权限
 * @method void setHasLakeFs(boolean $HasLakeFs) 设置是否有托管存储权限
 * @method string getLakeFsStatus() 获取托管存储状态，HasLakeFs等于true时，该值才有意义
 * @method void setLakeFsStatus(string $LakeFsStatus) 设置托管存储状态，HasLakeFs等于true时，该值才有意义
 * @method string getBucketType() 获取托管存储桶类型
 * @method void setBucketType(string $BucketType) 设置托管存储桶类型
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAdvancedStoreLocationResponse extends AbstractModel
{
    /**
     * @var integer 是否启用高级设置：0-否，1-是
     */
    public $Enable;

    /**
     * @var string 查询结果保存cos路径
     */
    public $StoreLocation;

    /**
     * @var boolean 是否有托管存储权限
     */
    public $HasLakeFs;

    /**
     * @var string 托管存储状态，HasLakeFs等于true时，该值才有意义
     */
    public $LakeFsStatus;

    /**
     * @var string 托管存储桶类型
     */
    public $BucketType;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Enable 是否启用高级设置：0-否，1-是
     * @param string $StoreLocation 查询结果保存cos路径
     * @param boolean $HasLakeFs 是否有托管存储权限
     * @param string $LakeFsStatus 托管存储状态，HasLakeFs等于true时，该值才有意义
     * @param string $BucketType 托管存储桶类型
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("StoreLocation",$param) and $param["StoreLocation"] !== null) {
            $this->StoreLocation = $param["StoreLocation"];
        }

        if (array_key_exists("HasLakeFs",$param) and $param["HasLakeFs"] !== null) {
            $this->HasLakeFs = $param["HasLakeFs"];
        }

        if (array_key_exists("LakeFsStatus",$param) and $param["LakeFsStatus"] !== null) {
            $this->LakeFsStatus = $param["LakeFsStatus"];
        }

        if (array_key_exists("BucketType",$param) and $param["BucketType"] !== null) {
            $this->BucketType = $param["BucketType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
