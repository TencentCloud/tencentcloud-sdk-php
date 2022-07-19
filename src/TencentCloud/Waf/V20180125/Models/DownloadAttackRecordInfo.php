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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 下载攻击日志记录数据项
 *
 * @method integer getId() 获取记录ID
 * @method void setId(integer $Id) 设置记录ID
 * @method string getTaskName() 获取下载任务名
 * @method void setTaskName(string $TaskName) 设置下载任务名
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getHost() 获取域名
 * @method void setHost(string $Host) 设置域名
 * @method integer getCount() 获取当前下载任务的日志条数
 * @method void setCount(integer $Count) 设置当前下载任务的日志条数
 * @method integer getStatus() 获取下载任务运行状态：-1-下载超时，0-下载等待，1-下载完成，2-下载失败，4-正在下载
 * @method void setStatus(integer $Status) 设置下载任务运行状态：-1-下载超时，0-下载等待，1-下载完成，2-下载失败，4-正在下载
 * @method string getUrl() 获取下载文件URL
 * @method void setUrl(string $Url) 设置下载文件URL
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取最后更新修改时间
 * @method void setModifyTime(string $ModifyTime) 设置最后更新修改时间
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method integer getTotalCount() 获取下载任务需下载的日志总条数
 * @method void setTotalCount(integer $TotalCount) 设置下载任务需下载的日志总条数
 */
class DownloadAttackRecordInfo extends AbstractModel
{
    /**
     * @var integer 记录ID
     */
    public $Id;

    /**
     * @var string 下载任务名
     */
    public $TaskName;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 域名
     */
    public $Host;

    /**
     * @var integer 当前下载任务的日志条数
     */
    public $Count;

    /**
     * @var integer 下载任务运行状态：-1-下载超时，0-下载等待，1-下载完成，2-下载失败，4-正在下载
     */
    public $Status;

    /**
     * @var string 下载文件URL
     */
    public $Url;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 最后更新修改时间
     */
    public $ModifyTime;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var integer 下载任务需下载的日志总条数
     */
    public $TotalCount;

    /**
     * @param integer $Id 记录ID
     * @param string $TaskName 下载任务名
     * @param string $TaskId 任务ID
     * @param string $Host 域名
     * @param integer $Count 当前下载任务的日志条数
     * @param integer $Status 下载任务运行状态：-1-下载超时，0-下载等待，1-下载完成，2-下载失败，4-正在下载
     * @param string $Url 下载文件URL
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 最后更新修改时间
     * @param string $ExpireTime 过期时间
     * @param integer $TotalCount 下载任务需下载的日志总条数
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
