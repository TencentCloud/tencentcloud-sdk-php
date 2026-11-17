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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FeatureLookup
 *
 * @method string getTableName() 获取特征表全名
 * @method void setTableName(string $TableName) 设置特征表全名
 * @method array getLookupKey() 获取关联键
 * @method void setLookupKey(array $LookupKey) 设置关联键
 * @method string getTimestampLookupKey() 获取时间戳关联键
 * @method void setTimestampLookupKey(string $TimestampLookupKey) 设置时间戳关联键
 * @method array getFeatureNames() 获取特征列名列表
 * @method void setFeatureNames(array $FeatureNames) 设置特征列名列表
 */
class FeatureLookup extends AbstractModel
{
    /**
     * @var string 特征表全名
     */
    public $TableName;

    /**
     * @var array 关联键
     */
    public $LookupKey;

    /**
     * @var string 时间戳关联键
     */
    public $TimestampLookupKey;

    /**
     * @var array 特征列名列表
     */
    public $FeatureNames;

    /**
     * @param string $TableName 特征表全名
     * @param array $LookupKey 关联键
     * @param string $TimestampLookupKey 时间戳关联键
     * @param array $FeatureNames 特征列名列表
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("LookupKey",$param) and $param["LookupKey"] !== null) {
            $this->LookupKey = $param["LookupKey"];
        }

        if (array_key_exists("TimestampLookupKey",$param) and $param["TimestampLookupKey"] !== null) {
            $this->TimestampLookupKey = $param["TimestampLookupKey"];
        }

        if (array_key_exists("FeatureNames",$param) and $param["FeatureNames"] !== null) {
            $this->FeatureNames = $param["FeatureNames"];
        }
    }
}
