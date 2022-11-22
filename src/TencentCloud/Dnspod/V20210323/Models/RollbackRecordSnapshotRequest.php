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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RollbackRecordSnapshot请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getSnapshotId() 获取快照 ID
 * @method void setSnapshotId(string $SnapshotId) 设置快照 ID
 * @method array getRecordList() 获取解析记录信息
 * @method void setRecordList(array $RecordList) 设置解析记录信息
 * @method integer getTaskId() 获取之前的快照回滚任务 ID
 * @method void setTaskId(integer $TaskId) 设置之前的快照回滚任务 ID
 * @method integer getDomainId() 获取域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。
 * @method void setDomainId(integer $DomainId) 设置域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。
 */
class RollbackRecordSnapshotRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 快照 ID
     */
    public $SnapshotId;

    /**
     * @var array 解析记录信息
     */
    public $RecordList;

    /**
     * @var integer 之前的快照回滚任务 ID
     */
    public $TaskId;

    /**
     * @var integer 域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。
     */
    public $DomainId;

    /**
     * @param string $Domain 域名
     * @param string $SnapshotId 快照 ID
     * @param array $RecordList 解析记录信息
     * @param integer $TaskId 之前的快照回滚任务 ID
     * @param integer $DomainId 域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("RecordList",$param) and $param["RecordList"] !== null) {
            $this->RecordList = [];
            foreach ($param["RecordList"] as $key => $value){
                $obj = new SnapshotRecord();
                $obj->deserialize($value);
                array_push($this->RecordList, $obj);
            }
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
