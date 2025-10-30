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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RollbackDataEngineImage请求参数结构体
 *
 * @method string getDataEngineId() 获取引擎ID
 * @method void setDataEngineId(string $DataEngineId) 设置引擎ID
 * @method string getFromRecordId() 获取检查是否能回滚的接口返回的FromRecordId参数
 * @method void setFromRecordId(string $FromRecordId) 设置检查是否能回滚的接口返回的FromRecordId参数
 * @method string getToRecordId() 获取检查是否能回滚的接口返回的ToRecordId参数
 * @method void setToRecordId(string $ToRecordId) 设置检查是否能回滚的接口返回的ToRecordId参数
 */
class RollbackDataEngineImageRequest extends AbstractModel
{
    /**
     * @var string 引擎ID
     */
    public $DataEngineId;

    /**
     * @var string 检查是否能回滚的接口返回的FromRecordId参数
     */
    public $FromRecordId;

    /**
     * @var string 检查是否能回滚的接口返回的ToRecordId参数
     */
    public $ToRecordId;

    /**
     * @param string $DataEngineId 引擎ID
     * @param string $FromRecordId 检查是否能回滚的接口返回的FromRecordId参数
     * @param string $ToRecordId 检查是否能回滚的接口返回的ToRecordId参数
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
        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("FromRecordId",$param) and $param["FromRecordId"] !== null) {
            $this->FromRecordId = $param["FromRecordId"];
        }

        if (array_key_exists("ToRecordId",$param) and $param["ToRecordId"] !== null) {
            $this->ToRecordId = $param["ToRecordId"];
        }
    }
}
