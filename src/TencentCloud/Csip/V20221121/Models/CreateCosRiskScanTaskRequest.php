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
 * CreateCosRiskScanTask请求参数结构体
 *
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method array getBucketNameSet() 获取需要扫描的桶列表
 * @method void setBucketNameSet(array $BucketNameSet) 设置需要扫描的桶列表
 * @method boolean getIsScanAllBucket() 获取是否扫描全部的桶
 * @method void setIsScanAllBucket(boolean $IsScanAllBucket) 设置是否扫描全部的桶
 */
class CreateCosRiskScanTaskRequest extends AbstractModel
{
    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var array 需要扫描的桶列表
     */
    public $BucketNameSet;

    /**
     * @var boolean 是否扫描全部的桶
     */
    public $IsScanAllBucket;

    /**
     * @param array $MemberId 集团账号的成员id
     * @param array $BucketNameSet 需要扫描的桶列表
     * @param boolean $IsScanAllBucket 是否扫描全部的桶
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("BucketNameSet",$param) and $param["BucketNameSet"] !== null) {
            $this->BucketNameSet = [];
            foreach ($param["BucketNameSet"] as $key => $value){
                $obj = new CosBucketInfo();
                $obj->deserialize($value);
                array_push($this->BucketNameSet, $obj);
            }
        }

        if (array_key_exists("IsScanAllBucket",$param) and $param["IsScanAllBucket"] !== null) {
            $this->IsScanAllBucket = $param["IsScanAllBucket"];
        }
    }
}
