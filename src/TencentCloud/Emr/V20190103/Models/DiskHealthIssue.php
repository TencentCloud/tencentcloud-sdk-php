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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 磁盘
 *
 * @method string getDiskId() 获取<p>磁盘id</p>
 * @method void setDiskId(string $DiskId) 设置<p>磁盘id</p>
 * @method string getMountDir() 获取<p>挂载的目录</p>
 * @method void setMountDir(string $MountDir) 设置<p>挂载的目录</p>
 * @method string getDeviceName() 获取<p>设备路径</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备路径</p>
 * @method integer getCheckType() 获取<p>异常类型</p>
 * @method void setCheckType(integer $CheckType) 设置<p>异常类型</p>
 * @method integer getSeverity() 获取<p>优先级</p>
 * @method void setSeverity(integer $Severity) 设置<p>优先级</p>
 * @method integer getState() 获取<p>状态</p>
 * @method void setState(integer $State) 设置<p>状态</p>
 * @method string getDetectSource() 获取<p>探测来源</p>
 * @method void setDetectSource(string $DetectSource) 设置<p>探测来源</p>
 * @method string getFirstDetectTime() 获取<p>第一次探测时间</p>
 * @method void setFirstDetectTime(string $FirstDetectTime) 设置<p>第一次探测时间</p>
 * @method string getLastDetectTime() 获取<p>最新探测时间</p>
 * @method void setLastDetectTime(string $LastDetectTime) 设置<p>最新探测时间</p>
 * @method string getDetectDetail() 获取<p>探测信息</p>
 * @method void setDetectDetail(string $DetectDetail) 设置<p>探测信息</p>
 */
class DiskHealthIssue extends AbstractModel
{
    /**
     * @var string <p>磁盘id</p>
     */
    public $DiskId;

    /**
     * @var string <p>挂载的目录</p>
     */
    public $MountDir;

    /**
     * @var string <p>设备路径</p>
     */
    public $DeviceName;

    /**
     * @var integer <p>异常类型</p>
     */
    public $CheckType;

    /**
     * @var integer <p>优先级</p>
     */
    public $Severity;

    /**
     * @var integer <p>状态</p>
     */
    public $State;

    /**
     * @var string <p>探测来源</p>
     */
    public $DetectSource;

    /**
     * @var string <p>第一次探测时间</p>
     */
    public $FirstDetectTime;

    /**
     * @var string <p>最新探测时间</p>
     */
    public $LastDetectTime;

    /**
     * @var string <p>探测信息</p>
     */
    public $DetectDetail;

    /**
     * @param string $DiskId <p>磁盘id</p>
     * @param string $MountDir <p>挂载的目录</p>
     * @param string $DeviceName <p>设备路径</p>
     * @param integer $CheckType <p>异常类型</p>
     * @param integer $Severity <p>优先级</p>
     * @param integer $State <p>状态</p>
     * @param string $DetectSource <p>探测来源</p>
     * @param string $FirstDetectTime <p>第一次探测时间</p>
     * @param string $LastDetectTime <p>最新探测时间</p>
     * @param string $DetectDetail <p>探测信息</p>
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("MountDir",$param) and $param["MountDir"] !== null) {
            $this->MountDir = $param["MountDir"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("DetectSource",$param) and $param["DetectSource"] !== null) {
            $this->DetectSource = $param["DetectSource"];
        }

        if (array_key_exists("FirstDetectTime",$param) and $param["FirstDetectTime"] !== null) {
            $this->FirstDetectTime = $param["FirstDetectTime"];
        }

        if (array_key_exists("LastDetectTime",$param) and $param["LastDetectTime"] !== null) {
            $this->LastDetectTime = $param["LastDetectTime"];
        }

        if (array_key_exists("DetectDetail",$param) and $param["DetectDetail"] !== null) {
            $this->DetectDetail = $param["DetectDetail"];
        }
    }
}
