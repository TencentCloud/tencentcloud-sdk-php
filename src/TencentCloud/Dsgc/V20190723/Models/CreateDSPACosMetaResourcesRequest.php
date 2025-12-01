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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDSPACosMetaResources请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID。
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID。
 * @method array getCosBucketItems() 获取必填，COS资源列表
 * @method void setCosBucketItems(array $CosBucketItems) 设置必填，COS资源列表
 * @method string getResourceRegion() 获取资源所处地域。
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所处地域。
 * @method array getBuckets() 获取COS桶列表
 * @method void setBuckets(array $Buckets) 设置COS桶列表
 */
class CreateDSPACosMetaResourcesRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID。
     */
    public $DspaId;

    /**
     * @var array 必填，COS资源列表
     */
    public $CosBucketItems;

    /**
     * @var string 资源所处地域。
     * @deprecated
     */
    public $ResourceRegion;

    /**
     * @var array COS桶列表
     * @deprecated
     */
    public $Buckets;

    /**
     * @param string $DspaId DSPA实例ID。
     * @param array $CosBucketItems 必填，COS资源列表
     * @param string $ResourceRegion 资源所处地域。
     * @param array $Buckets COS桶列表
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("CosBucketItems",$param) and $param["CosBucketItems"] !== null) {
            $this->CosBucketItems = [];
            foreach ($param["CosBucketItems"] as $key => $value){
                $obj = new CosBucketItem();
                $obj->deserialize($value);
                array_push($this->CosBucketItems, $obj);
            }
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("Buckets",$param) and $param["Buckets"] !== null) {
            $this->Buckets = $param["Buckets"];
        }
    }
}
