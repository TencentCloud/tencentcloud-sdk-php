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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDLPFileDetectTask请求参数结构体
 *
 * @method string getDownloadUrl() 获取文件下载Url
 * @method void setDownloadUrl(string $DownloadUrl) 设置文件下载Url
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method string getFileMd5() 获取文件Md5
 * @method void setFileMd5(string $FileMd5) 设置文件Md5
 * @method integer getBalanceType() 获取负载类型  1 从GroupId中选一节点 鉴定  2使用所有SelectNodeIds节点鉴定
 * @method void setBalanceType(integer $BalanceType) 设置负载类型  1 从GroupId中选一节点 鉴定  2使用所有SelectNodeIds节点鉴定
 * @method string getDomainInstanceId() 获取管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 * @method void setDomainInstanceId(string $DomainInstanceId) 设置管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 * @method array getSelectNodeIds() 获取选中节点唯一Id列表,BalanceType=2时必填
 * @method void setSelectNodeIds(array $SelectNodeIds) 设置选中节点唯一Id列表,BalanceType=2时必填
 * @method string getGroupId() 获取节点组唯一Id,BalanceType=1时必填
 * @method void setGroupId(string $GroupId) 设置节点组唯一Id,BalanceType=1时必填
 */
class CreateDLPFileDetectTaskRequest extends AbstractModel
{
    /**
     * @var string 文件下载Url
     */
    public $DownloadUrl;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var string 文件Md5
     */
    public $FileMd5;

    /**
     * @var integer 负载类型  1 从GroupId中选一节点 鉴定  2使用所有SelectNodeIds节点鉴定
     */
    public $BalanceType;

    /**
     * @var string 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
     */
    public $DomainInstanceId;

    /**
     * @var array 选中节点唯一Id列表,BalanceType=2时必填
     */
    public $SelectNodeIds;

    /**
     * @var string 节点组唯一Id,BalanceType=1时必填
     */
    public $GroupId;

    /**
     * @param string $DownloadUrl 文件下载Url
     * @param string $FileName 文件名
     * @param string $FileMd5 文件Md5
     * @param integer $BalanceType 负载类型  1 从GroupId中选一节点 鉴定  2使用所有SelectNodeIds节点鉴定
     * @param string $DomainInstanceId 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
     * @param array $SelectNodeIds 选中节点唯一Id列表,BalanceType=2时必填
     * @param string $GroupId 节点组唯一Id,BalanceType=1时必填
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
        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("BalanceType",$param) and $param["BalanceType"] !== null) {
            $this->BalanceType = $param["BalanceType"];
        }

        if (array_key_exists("DomainInstanceId",$param) and $param["DomainInstanceId"] !== null) {
            $this->DomainInstanceId = $param["DomainInstanceId"];
        }

        if (array_key_exists("SelectNodeIds",$param) and $param["SelectNodeIds"] !== null) {
            $this->SelectNodeIds = $param["SelectNodeIds"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
