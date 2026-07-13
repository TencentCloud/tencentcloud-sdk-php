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
 * 存储桶id
 *
 * @method string getAppId() 获取appid
 * @method void setAppId(string $AppId) 设置appid
 * @method integer getIsAutoMonitor() 获取
 * @method void setIsAutoMonitor(integer $IsAutoMonitor) 设置
 * @method array getBucketIdSet() 获取bucket id集合
 * @method void setBucketIdSet(array $BucketIdSet) 设置bucket id集合
 */
class CosBucketId extends AbstractModel
{
    /**
     * @var string appid
     */
    public $AppId;

    /**
     * @var integer 
     */
    public $IsAutoMonitor;

    /**
     * @var array bucket id集合
     */
    public $BucketIdSet;

    /**
     * @param string $AppId appid
     * @param integer $IsAutoMonitor 
     * @param array $BucketIdSet bucket id集合
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

        if (array_key_exists("IsAutoMonitor",$param) and $param["IsAutoMonitor"] !== null) {
            $this->IsAutoMonitor = $param["IsAutoMonitor"];
        }

        if (array_key_exists("BucketIdSet",$param) and $param["BucketIdSet"] !== null) {
            $this->BucketIdSet = $param["BucketIdSet"];
        }
    }
}
