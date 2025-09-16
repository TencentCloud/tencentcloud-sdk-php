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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBatchIpAccessControl请求参数结构体
 *
 * @method array getIpList() 获取IP参数列表
 * @method void setIpList(array $IpList) 设置IP参数列表
 * @method string getJobType() 获取规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method void setJobType(string $JobType) 设置规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method JobDateTime getJobDateTime() 获取定时任务配置
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置定时任务配置
 * @method integer getActionType() 获取42为黑名单，40为白名单
 * @method void setActionType(integer $ActionType) 设置42为黑名单，40为白名单
 * @method array getGroupIds() 获取防护对象组ID列表，如果绑定的是防护对象组，和Domains参数二选一
 * @method void setGroupIds(array $GroupIds) 设置防护对象组ID列表，如果绑定的是防护对象组，和Domains参数二选一
 * @method array getDomains() 获取域名列表，如果绑定的是批量域名，和GroupIds参数二选一
 * @method void setDomains(array $Domains) 设置域名列表，如果绑定的是批量域名，和GroupIds参数二选一
 * @method string getNote() 获取备注
 * @method void setNote(string $Note) 设置备注
 */
class CreateBatchIpAccessControlRequest extends AbstractModel
{
    /**
     * @var array IP参数列表
     */
    public $IpList;

    /**
     * @var string 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     */
    public $JobType;

    /**
     * @var JobDateTime 定时任务配置
     */
    public $JobDateTime;

    /**
     * @var integer 42为黑名单，40为白名单
     */
    public $ActionType;

    /**
     * @var array 防护对象组ID列表，如果绑定的是防护对象组，和Domains参数二选一
     */
    public $GroupIds;

    /**
     * @var array 域名列表，如果绑定的是批量域名，和GroupIds参数二选一
     */
    public $Domains;

    /**
     * @var string 备注
     */
    public $Note;

    /**
     * @param array $IpList IP参数列表
     * @param string $JobType 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     * @param JobDateTime $JobDateTime 定时任务配置
     * @param integer $ActionType 42为黑名单，40为白名单
     * @param array $GroupIds 防护对象组ID列表，如果绑定的是防护对象组，和Domains参数二选一
     * @param array $Domains 域名列表，如果绑定的是批量域名，和GroupIds参数二选一
     * @param string $Note 备注
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
        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
