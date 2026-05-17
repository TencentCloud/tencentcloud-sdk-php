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
 * ModifyCosMarkInfo请求参数结构体
 *
 * @method array getBucketNameSet() 获取需要修改的存储桶列表
 * @method void setBucketNameSet(array $BucketNameSet) 设置需要修改的存储桶列表
 * @method string getMarkInfo() 获取备注信息
 * @method void setMarkInfo(string $MarkInfo) 设置备注信息
 */
class ModifyCosMarkInfoRequest extends AbstractModel
{
    /**
     * @var array 需要修改的存储桶列表
     */
    public $BucketNameSet;

    /**
     * @var string 备注信息
     */
    public $MarkInfo;

    /**
     * @param array $BucketNameSet 需要修改的存储桶列表
     * @param string $MarkInfo 备注信息
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
        if (array_key_exists("BucketNameSet",$param) and $param["BucketNameSet"] !== null) {
            $this->BucketNameSet = [];
            foreach ($param["BucketNameSet"] as $key => $value){
                $obj = new CosBucketInfo();
                $obj->deserialize($value);
                array_push($this->BucketNameSet, $obj);
            }
        }

        if (array_key_exists("MarkInfo",$param) and $param["MarkInfo"] !== null) {
            $this->MarkInfo = $param["MarkInfo"];
        }
    }
}
