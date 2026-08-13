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
 * ScanCSIPTaskAgain请求参数结构体
 *
 * @method integer getTaskId() 获取<p>扫描任务ID</p>
 * @method void setTaskId(integer $TaskId) 设置<p>扫描任务ID</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getInstanceIDList() 获取<p>限定本次重扫的目标主机列表；为空时取主表对应子表的全量 实例ID；长度上限 1000</p>
 * @method void setInstanceIDList(array $InstanceIDList) 设置<p>限定本次重扫的目标主机列表；为空时取主表对应子表的全量 实例ID；长度上限 1000</p>
 * @method integer getTimeoutPeriod() 获取<p>扫描超时时长（秒），可选。非零时更新一键扫描超时配置并同步更新子表 timeout 字段。上限 7200 秒（2小时），超出返回 InvalidParameter。</p>
 * @method void setTimeoutPeriod(integer $TimeoutPeriod) 设置<p>扫描超时时长（秒），可选。非零时更新一键扫描超时配置并同步更新子表 timeout 字段。上限 7200 秒（2小时），超出返回 InvalidParameter。</p>
 */
class ScanCSIPTaskAgainRequest extends AbstractModel
{
    /**
     * @var integer <p>扫描任务ID</p>
     */
    public $TaskId;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>限定本次重扫的目标主机列表；为空时取主表对应子表的全量 实例ID；长度上限 1000</p>
     */
    public $InstanceIDList;

    /**
     * @var integer <p>扫描超时时长（秒），可选。非零时更新一键扫描超时配置并同步更新子表 timeout 字段。上限 7200 秒（2小时），超出返回 InvalidParameter。</p>
     */
    public $TimeoutPeriod;

    /**
     * @param integer $TaskId <p>扫描任务ID</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $InstanceIDList <p>限定本次重扫的目标主机列表；为空时取主表对应子表的全量 实例ID；长度上限 1000</p>
     * @param integer $TimeoutPeriod <p>扫描超时时长（秒），可选。非零时更新一键扫描超时配置并同步更新子表 timeout 字段。上限 7200 秒（2小时），超出返回 InvalidParameter。</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("InstanceIDList",$param) and $param["InstanceIDList"] !== null) {
            $this->InstanceIDList = $param["InstanceIDList"];
        }

        if (array_key_exists("TimeoutPeriod",$param) and $param["TimeoutPeriod"] !== null) {
            $this->TimeoutPeriod = $param["TimeoutPeriod"];
        }
    }
}
