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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDataModel请求参数结构体
 *
 * @method string getCloudappId() 获取云应用的实例id
 * @method void setCloudappId(string $CloudappId) 设置云应用的实例id
 * @method string getUserId() 获取用户的子账号id
 * @method void setUserId(string $UserId) 设置用户的子账号id
 * @method string getTimeUnit() 获取Wedata数据建模购买参数，包年包月类型单位，年：y，月：m，默认m
 * @method void setTimeUnit(string $TimeUnit) 设置Wedata数据建模购买参数，包年包月类型单位，年：y，月：m，默认m
 * @method integer getTimeSpan() 获取Wedata数据建模购买参数，购买时长，默认1
 * @method void setTimeSpan(integer $TimeSpan) 设置Wedata数据建模购买参数，购买时长，默认1
 * @method integer getAutoRenewFlag() 获取Wedata数据建模购买参数，是否自动续费，是：1，否：0，默认0
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置Wedata数据建模购买参数，是否自动续费，是：1，否：0，默认0
 * @method string getDataModelVersion() 获取Wedata数据建模购买参数，标准版：DATA_MODEL_STANDARD，企业版：DATA_MODEL_PRO，默认DATA_MODEL_STANDARD
 * @method void setDataModelVersion(string $DataModelVersion) 设置Wedata数据建模购买参数，标准版：DATA_MODEL_STANDARD，企业版：DATA_MODEL_PRO，默认DATA_MODEL_STANDARD
 */
class CreateDataModelRequest extends AbstractModel
{
    /**
     * @var string 云应用的实例id
     */
    public $CloudappId;

    /**
     * @var string 用户的子账号id
     */
    public $UserId;

    /**
     * @var string Wedata数据建模购买参数，包年包月类型单位，年：y，月：m，默认m
     */
    public $TimeUnit;

    /**
     * @var integer Wedata数据建模购买参数，购买时长，默认1
     */
    public $TimeSpan;

    /**
     * @var integer Wedata数据建模购买参数，是否自动续费，是：1，否：0，默认0
     */
    public $AutoRenewFlag;

    /**
     * @var string Wedata数据建模购买参数，标准版：DATA_MODEL_STANDARD，企业版：DATA_MODEL_PRO，默认DATA_MODEL_STANDARD
     */
    public $DataModelVersion;

    /**
     * @param string $CloudappId 云应用的实例id
     * @param string $UserId 用户的子账号id
     * @param string $TimeUnit Wedata数据建模购买参数，包年包月类型单位，年：y，月：m，默认m
     * @param integer $TimeSpan Wedata数据建模购买参数，购买时长，默认1
     * @param integer $AutoRenewFlag Wedata数据建模购买参数，是否自动续费，是：1，否：0，默认0
     * @param string $DataModelVersion Wedata数据建模购买参数，标准版：DATA_MODEL_STANDARD，企业版：DATA_MODEL_PRO，默认DATA_MODEL_STANDARD
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
        if (array_key_exists("CloudappId",$param) and $param["CloudappId"] !== null) {
            $this->CloudappId = $param["CloudappId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("DataModelVersion",$param) and $param["DataModelVersion"] !== null) {
            $this->DataModelVersion = $param["DataModelVersion"];
        }
    }
}
