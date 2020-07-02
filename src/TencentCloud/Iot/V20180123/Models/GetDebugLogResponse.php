<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
 * GetDebugLog返回参数结构体
 *
 * @method array getDebugLog() 获取调试日志
 * @method void setDebugLog(array $DebugLog) 设置调试日志
 * @method string getScrollId() 获取查询游标
 * @method void setScrollId(string $ScrollId) 设置查询游标
 * @method integer getScrollTimeout() 获取游标超时
 * @method void setScrollTimeout(integer $ScrollTimeout) 设置游标超时
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetDebugLogResponse extends AbstractModel
{
    /**
     * @var array 调试日志
     */
    public $DebugLog;

    /**
     * @var string 查询游标
     */
    public $ScrollId;

    /**
     * @var integer 游标超时
     */
    public $ScrollTimeout;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DebugLog 调试日志
     * @param string $ScrollId 查询游标
     * @param integer $ScrollTimeout 游标超时
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
        if (array_key_exists('DebugLog',$param) and $param['DebugLog'] !== null) {
            $this->DebugLog = [];
            foreach ($param['DebugLog'] as $key => $value){
                $obj = new DebugLogEntry();
                $obj->deserialize($value);
                array_push($this->DebugLog, $obj);
            }
        }

        if (array_key_exists('ScrollId',$param) and $param['ScrollId'] !== null) {
            $this->ScrollId = $param['ScrollId'];
        }

        if (array_key_exists('ScrollTimeout',$param) and $param['ScrollTimeout'] !== null) {
            $this->ScrollTimeout = $param['ScrollTimeout'];
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}
