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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TerminateInstances请求参数结构体
 *
 * @method array getInstanceIdSet() 获取待销毁的实例ID列表。
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置待销毁的实例ID列表。
 * @method boolean getTerminateDelay() 获取是否定时销毁，默认为否。
 * @method void setTerminateDelay(boolean $TerminateDelay) 设置是否定时销毁，默认为否。
 * @method string getTerminateTime() 获取定时销毁的时间，格式形如："2019-08-05 12:01:30"，若非定时销毁，则此参数被忽略。
 * @method void setTerminateTime(string $TerminateTime) 设置定时销毁的时间，格式形如："2019-08-05 12:01:30"，若非定时销毁，则此参数被忽略。
 */
class TerminateInstancesRequest extends AbstractModel
{
    /**
     * @var array 待销毁的实例ID列表。
     */
    public $InstanceIdSet;

    /**
     * @var boolean 是否定时销毁，默认为否。
     */
    public $TerminateDelay;

    /**
     * @var string 定时销毁的时间，格式形如："2019-08-05 12:01:30"，若非定时销毁，则此参数被忽略。
     */
    public $TerminateTime;

    /**
     * @param array $InstanceIdSet 待销毁的实例ID列表。
     * @param boolean $TerminateDelay 是否定时销毁，默认为否。
     * @param string $TerminateTime 定时销毁的时间，格式形如："2019-08-05 12:01:30"，若非定时销毁，则此参数被忽略。
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
        if (array_key_exists('InstanceIdSet',$param) and $param['InstanceIdSet'] !== null) {
            $this->InstanceIdSet = $param['InstanceIdSet'];
        }

        if (array_key_exists('TerminateDelay',$param) and $param['TerminateDelay'] !== null) {
            $this->TerminateDelay = $param['TerminateDelay'];
        }

        if (array_key_exists('TerminateTime',$param) and $param['TerminateTime'] !== null) {
            $this->TerminateTime = $param['TerminateTime'];
        }
    }
}
