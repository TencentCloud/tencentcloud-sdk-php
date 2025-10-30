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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量删除证书异步任务结果
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getCertId() 获取证书ID
 * @method void setCertId(string $CertId) 设置证书ID
 * @method integer getStatus() 获取异步查询结果： 0表示任务进行中、 1表示任务成功、 2表示任务失败、3表示未授权服务角色导致任务失败、4表示有未解绑的云资源导致任务失败、5表示查询关联云资源超时导致任务失败
 * @method void setStatus(integer $Status) 设置异步查询结果： 0表示任务进行中、 1表示任务成功、 2表示任务失败、3表示未授权服务角色导致任务失败、4表示有未解绑的云资源导致任务失败、5表示查询关联云资源超时导致任务失败
 * @method string getError() 获取错误信息
 * @method void setError(string $Error) 设置错误信息
 * @method string getCacheTime() 获取当前结果缓存时间
 * @method void setCacheTime(string $CacheTime) 设置当前结果缓存时间
 * @method array getDomains() 获取包含的域名
 * @method void setDomains(array $Domains) 设置包含的域名
 */
class DeleteTaskResult extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 证书ID
     */
    public $CertId;

    /**
     * @var integer 异步查询结果： 0表示任务进行中、 1表示任务成功、 2表示任务失败、3表示未授权服务角色导致任务失败、4表示有未解绑的云资源导致任务失败、5表示查询关联云资源超时导致任务失败
     */
    public $Status;

    /**
     * @var string 错误信息
     */
    public $Error;

    /**
     * @var string 当前结果缓存时间
     */
    public $CacheTime;

    /**
     * @var array 包含的域名
     */
    public $Domains;

    /**
     * @param string $TaskId 任务ID
     * @param string $CertId 证书ID
     * @param integer $Status 异步查询结果： 0表示任务进行中、 1表示任务成功、 2表示任务失败、3表示未授权服务角色导致任务失败、4表示有未解绑的云资源导致任务失败、5表示查询关联云资源超时导致任务失败
     * @param string $Error 错误信息
     * @param string $CacheTime 当前结果缓存时间
     * @param array $Domains 包含的域名
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

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }
    }
}
