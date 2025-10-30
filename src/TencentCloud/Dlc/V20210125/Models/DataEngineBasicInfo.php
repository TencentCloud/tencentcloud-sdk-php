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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DataEngine基本信息
 *
 * @method string getDataEngineName() 获取DataEngine名称
 * @method void setDataEngineName(string $DataEngineName) 设置DataEngine名称
 * @method integer getState() 获取数据引擎状态  -2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中
 * @method void setState(integer $State) 设置数据引擎状态  -2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 * @method string getMessage() 获取返回信息
 * @method void setMessage(string $Message) 设置返回信息
 * @method string getDataEngineId() 获取引擎id
 * @method void setDataEngineId(string $DataEngineId) 设置引擎id
 * @method string getDataEngineType() 获取引擎类型，有效值：PrestoSQL/SparkSQL/SparkBatch
 * @method void setDataEngineType(string $DataEngineType) 设置引擎类型，有效值：PrestoSQL/SparkSQL/SparkBatch
 * @method integer getAppId() 获取用户ID
 * @method void setAppId(integer $AppId) 设置用户ID
 * @method string getUserUin() 获取账号ID
 * @method void setUserUin(string $UserUin) 设置账号ID
 */
class DataEngineBasicInfo extends AbstractModel
{
    /**
     * @var string DataEngine名称
     */
    public $DataEngineName;

    /**
     * @var integer 数据引擎状态  -2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中
     */
    public $State;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 返回信息
     */
    public $Message;

    /**
     * @var string 引擎id
     */
    public $DataEngineId;

    /**
     * @var string 引擎类型，有效值：PrestoSQL/SparkSQL/SparkBatch
     */
    public $DataEngineType;

    /**
     * @var integer 用户ID
     */
    public $AppId;

    /**
     * @var string 账号ID
     */
    public $UserUin;

    /**
     * @param string $DataEngineName DataEngine名称
     * @param integer $State 数据引擎状态  -2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中
     * @param integer $CreateTime 创建时间
     * @param integer $UpdateTime 更新时间
     * @param string $Message 返回信息
     * @param string $DataEngineId 引擎id
     * @param string $DataEngineType 引擎类型，有效值：PrestoSQL/SparkSQL/SparkBatch
     * @param integer $AppId 用户ID
     * @param string $UserUin 账号ID
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("DataEngineType",$param) and $param["DataEngineType"] !== null) {
            $this->DataEngineType = $param["DataEngineType"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }
    }
}
