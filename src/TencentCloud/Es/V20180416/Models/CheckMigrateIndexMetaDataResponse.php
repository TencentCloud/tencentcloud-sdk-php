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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckMigrateIndexMetaData返回参数结构体
 *
 * @method array getMappingTimeFieldCheckFailedIndexArr() 获取不存在于目标索引时间字段相同的字段
 * @method void setMappingTimeFieldCheckFailedIndexArr(array $MappingTimeFieldCheckFailedIndexArr) 设置不存在于目标索引时间字段相同的字段
 * @method array getMappingTimeTypeCheckFailedIndexArr() 获取@timestamp不为date类型，与目标索引时间字段冲突
 * @method void setMappingTimeTypeCheckFailedIndexArr(array $MappingTimeTypeCheckFailedIndexArr) 设置@timestamp不为date类型，与目标索引时间字段冲突
 * @method array getSettingCheckFailedIndexArr() 获取索引的创建时间不在 serverless的存储周期内
 * @method void setSettingCheckFailedIndexArr(array $SettingCheckFailedIndexArr) 设置索引的创建时间不在 serverless的存储周期内
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CheckMigrateIndexMetaDataResponse extends AbstractModel
{
    /**
     * @var array 不存在于目标索引时间字段相同的字段
     */
    public $MappingTimeFieldCheckFailedIndexArr;

    /**
     * @var array @timestamp不为date类型，与目标索引时间字段冲突
     */
    public $MappingTimeTypeCheckFailedIndexArr;

    /**
     * @var array 索引的创建时间不在 serverless的存储周期内
     */
    public $SettingCheckFailedIndexArr;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $MappingTimeFieldCheckFailedIndexArr 不存在于目标索引时间字段相同的字段
     * @param array $MappingTimeTypeCheckFailedIndexArr @timestamp不为date类型，与目标索引时间字段冲突
     * @param array $SettingCheckFailedIndexArr 索引的创建时间不在 serverless的存储周期内
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
        if (array_key_exists("MappingTimeFieldCheckFailedIndexArr",$param) and $param["MappingTimeFieldCheckFailedIndexArr"] !== null) {
            $this->MappingTimeFieldCheckFailedIndexArr = $param["MappingTimeFieldCheckFailedIndexArr"];
        }

        if (array_key_exists("MappingTimeTypeCheckFailedIndexArr",$param) and $param["MappingTimeTypeCheckFailedIndexArr"] !== null) {
            $this->MappingTimeTypeCheckFailedIndexArr = $param["MappingTimeTypeCheckFailedIndexArr"];
        }

        if (array_key_exists("SettingCheckFailedIndexArr",$param) and $param["SettingCheckFailedIndexArr"] !== null) {
            $this->SettingCheckFailedIndexArr = $param["SettingCheckFailedIndexArr"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
