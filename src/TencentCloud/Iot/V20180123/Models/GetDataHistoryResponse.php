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
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDataHistory返回参数结构体
 *
 * @method array getDataHistory() 获取数据历史
 * @method void setDataHistory(array $DataHistory) 设置数据历史
 * @method string getScrollId() 获取查询游标
 * @method void setScrollId(string $ScrollId) 设置查询游标
 * @method integer getScrollTimeout() 获取查询游标超时
 * @method void setScrollTimeout(integer $ScrollTimeout) 设置查询游标超时
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetDataHistoryResponse extends AbstractModel
{
    /**
     * @var array 数据历史
     */
    public $DataHistory;

    /**
     * @var string 查询游标
     */
    public $ScrollId;

    /**
     * @var integer 查询游标超时
     */
    public $ScrollTimeout;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DataHistory 数据历史
     * @param string $ScrollId 查询游标
     * @param integer $ScrollTimeout 查询游标超时
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
        if (array_key_exists("DataHistory",$param) and $param["DataHistory"] !== null) {
            $this->DataHistory = [];
            foreach ($param["DataHistory"] as $key => $value){
                $obj = new DataHistoryEntry();
                $obj->deserialize($value);
                array_push($this->DataHistory, $obj);
            }
        }

        if (array_key_exists("ScrollId",$param) and $param["ScrollId"] !== null) {
            $this->ScrollId = $param["ScrollId"];
        }

        if (array_key_exists("ScrollTimeout",$param) and $param["ScrollTimeout"] !== null) {
            $this->ScrollTimeout = $param["ScrollTimeout"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
