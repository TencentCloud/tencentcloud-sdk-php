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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanDnsRecords返回参数结构体
 *
 * @method string getStatus() 获取扫描状态
- doing 扫描中
- done 扫描完成
 * @method void setStatus(string $Status) 设置扫描状态
- doing 扫描中
- done 扫描完成
 * @method integer getRecordsAdded() 获取扫描后添加的记录数
 * @method void setRecordsAdded(integer $RecordsAdded) 设置扫描后添加的记录数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ScanDnsRecordsResponse extends AbstractModel
{
    /**
     * @var string 扫描状态
- doing 扫描中
- done 扫描完成
     */
    public $Status;

    /**
     * @var integer 扫描后添加的记录数
     */
    public $RecordsAdded;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 扫描状态
- doing 扫描中
- done 扫描完成
     * @param integer $RecordsAdded 扫描后添加的记录数
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RecordsAdded",$param) and $param["RecordsAdded"] !== null) {
            $this->RecordsAdded = $param["RecordsAdded"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
