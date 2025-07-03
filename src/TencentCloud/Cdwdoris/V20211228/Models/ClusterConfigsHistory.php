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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群的配置文件的修改历史
 *
 * @method string getComputeGroupId() 获取计算组id
 * @method void setComputeGroupId(string $ComputeGroupId) 设置计算组id
 * @method string getFileName() 获取配置文件名称
 * @method void setFileName(string $FileName) 设置配置文件名称
 * @method string getNewConfValue() 获取修改后的配置文件内容，base64编码
 * @method void setNewConfValue(string $NewConfValue) 设置修改后的配置文件内容，base64编码
 * @method string getOldConfValue() 获取修改前的配置文件内容，base64编码
 * @method void setOldConfValue(string $OldConfValue) 设置修改前的配置文件内容，base64编码
 * @method string getRemark() 获取修改原因
 * @method void setRemark(string $Remark) 设置修改原因
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method string getUserUin() 获取修改子账号id
 * @method void setUserUin(string $UserUin) 设置修改子账号id
 */
class ClusterConfigsHistory extends AbstractModel
{
    /**
     * @var string 计算组id
     */
    public $ComputeGroupId;

    /**
     * @var string 配置文件名称
     */
    public $FileName;

    /**
     * @var string 修改后的配置文件内容，base64编码
     */
    public $NewConfValue;

    /**
     * @var string 修改前的配置文件内容，base64编码
     */
    public $OldConfValue;

    /**
     * @var string 修改原因
     */
    public $Remark;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var string 修改子账号id
     */
    public $UserUin;

    /**
     * @param string $ComputeGroupId 计算组id
     * @param string $FileName 配置文件名称
     * @param string $NewConfValue 修改后的配置文件内容，base64编码
     * @param string $OldConfValue 修改前的配置文件内容，base64编码
     * @param string $Remark 修改原因
     * @param string $ModifyTime 修改时间
     * @param string $UserUin 修改子账号id
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
        if (array_key_exists("ComputeGroupId",$param) and $param["ComputeGroupId"] !== null) {
            $this->ComputeGroupId = $param["ComputeGroupId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("NewConfValue",$param) and $param["NewConfValue"] !== null) {
            $this->NewConfValue = $param["NewConfValue"];
        }

        if (array_key_exists("OldConfValue",$param) and $param["OldConfValue"] !== null) {
            $this->OldConfValue = $param["OldConfValue"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }
    }
}
