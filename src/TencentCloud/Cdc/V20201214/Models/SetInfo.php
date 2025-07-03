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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云硬盘的仓库级别信息
 *
 * @method string getSetId() 获取云硬盘仓库id
 * @method void setSetId(string $SetId) 设置云硬盘仓库id
 * @method string getSetName() 获取云硬盘仓库名称
 * @method void setSetName(string $SetName) 设置云硬盘仓库名称
 * @method string getSetType() 获取云硬盘仓库类型
 * @method void setSetType(string $SetType) 设置云硬盘仓库类型
 * @method float getSetSize() 获取云硬盘仓库容量
 * @method void setSetSize(float $SetSize) 设置云硬盘仓库容量
 * @method string getSetStatus() 获取云硬盘仓库状态
 * @method void setSetStatus(string $SetStatus) 设置云硬盘仓库状态
 * @method string getCreateTime() 获取云硬盘仓库创建时间
 * @method void setCreateTime(string $CreateTime) 设置云硬盘仓库创建时间
 * @method DetailData getReadTraffic() 获取读流量
 * @method void setReadTraffic(DetailData $ReadTraffic) 设置读流量
 * @method DetailData getWriteTraffic() 获取写流量
 * @method void setWriteTraffic(DetailData $WriteTraffic) 设置写流量
 * @method DetailData getReadIO() 获取读IO
 * @method void setReadIO(DetailData $ReadIO) 设置读IO
 * @method DetailData getWriteIO() 获取写IO
 * @method void setWriteIO(DetailData $WriteIO) 设置写IO
 * @method DetailData getAwait() 获取平均等待时间
 * @method void setAwait(DetailData $Await) 设置平均等待时间
 * @method DetailData getUtil() 获取利用率
 * @method void setUtil(DetailData $Util) 设置利用率
 */
class SetInfo extends AbstractModel
{
    /**
     * @var string 云硬盘仓库id
     */
    public $SetId;

    /**
     * @var string 云硬盘仓库名称
     */
    public $SetName;

    /**
     * @var string 云硬盘仓库类型
     */
    public $SetType;

    /**
     * @var float 云硬盘仓库容量
     */
    public $SetSize;

    /**
     * @var string 云硬盘仓库状态
     */
    public $SetStatus;

    /**
     * @var string 云硬盘仓库创建时间
     */
    public $CreateTime;

    /**
     * @var DetailData 读流量
     */
    public $ReadTraffic;

    /**
     * @var DetailData 写流量
     */
    public $WriteTraffic;

    /**
     * @var DetailData 读IO
     */
    public $ReadIO;

    /**
     * @var DetailData 写IO
     */
    public $WriteIO;

    /**
     * @var DetailData 平均等待时间
     */
    public $Await;

    /**
     * @var DetailData 利用率
     */
    public $Util;

    /**
     * @param string $SetId 云硬盘仓库id
     * @param string $SetName 云硬盘仓库名称
     * @param string $SetType 云硬盘仓库类型
     * @param float $SetSize 云硬盘仓库容量
     * @param string $SetStatus 云硬盘仓库状态
     * @param string $CreateTime 云硬盘仓库创建时间
     * @param DetailData $ReadTraffic 读流量
     * @param DetailData $WriteTraffic 写流量
     * @param DetailData $ReadIO 读IO
     * @param DetailData $WriteIO 写IO
     * @param DetailData $Await 平均等待时间
     * @param DetailData $Util 利用率
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
        if (array_key_exists("SetId",$param) and $param["SetId"] !== null) {
            $this->SetId = $param["SetId"];
        }

        if (array_key_exists("SetName",$param) and $param["SetName"] !== null) {
            $this->SetName = $param["SetName"];
        }

        if (array_key_exists("SetType",$param) and $param["SetType"] !== null) {
            $this->SetType = $param["SetType"];
        }

        if (array_key_exists("SetSize",$param) and $param["SetSize"] !== null) {
            $this->SetSize = $param["SetSize"];
        }

        if (array_key_exists("SetStatus",$param) and $param["SetStatus"] !== null) {
            $this->SetStatus = $param["SetStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ReadTraffic",$param) and $param["ReadTraffic"] !== null) {
            $this->ReadTraffic = new DetailData();
            $this->ReadTraffic->deserialize($param["ReadTraffic"]);
        }

        if (array_key_exists("WriteTraffic",$param) and $param["WriteTraffic"] !== null) {
            $this->WriteTraffic = new DetailData();
            $this->WriteTraffic->deserialize($param["WriteTraffic"]);
        }

        if (array_key_exists("ReadIO",$param) and $param["ReadIO"] !== null) {
            $this->ReadIO = new DetailData();
            $this->ReadIO->deserialize($param["ReadIO"]);
        }

        if (array_key_exists("WriteIO",$param) and $param["WriteIO"] !== null) {
            $this->WriteIO = new DetailData();
            $this->WriteIO->deserialize($param["WriteIO"]);
        }

        if (array_key_exists("Await",$param) and $param["Await"] !== null) {
            $this->Await = new DetailData();
            $this->Await->deserialize($param["Await"]);
        }

        if (array_key_exists("Util",$param) and $param["Util"] !== null) {
            $this->Util = new DetailData();
            $this->Util->deserialize($param["Util"]);
        }
    }
}
