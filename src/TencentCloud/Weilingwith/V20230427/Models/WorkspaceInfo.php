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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作空间信息描述
 *
 * @method integer getWorkspaceId() 获取工作空间Id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间Id
 * @method string getChineseName() 获取工作空间中文名字
 * @method void setChineseName(string $ChineseName) 设置工作空间中文名字
 * @method string getDescription() 获取工作空间描述
 * @method void setDescription(string $Description) 设置工作空间描述
 * @method integer getStatus() 获取工作空间是否删除状态
 * @method void setStatus(integer $Status) 设置工作空间是否删除状态
 * @method string getParkName() 获取该工作空间绑定的区/县的行政区名字
 * @method void setParkName(string $ParkName) 设置该工作空间绑定的区/县的行政区名字
 * @method string getParkNum() 获取该工作空间绑定的区/县的行政区编码
 * @method void setParkNum(string $ParkNum) 设置该工作空间绑定的区/县的行政区编码
 * @method array getAdministrativeDetailSet() 获取获取该工作空间绑定的区/县的上级行政区划信息
 * @method void setAdministrativeDetailSet(array $AdministrativeDetailSet) 设置获取该工作空间绑定的区/县的上级行政区划信息
 */
class WorkspaceInfo extends AbstractModel
{
    /**
     * @var integer 工作空间Id
     */
    public $WorkspaceId;

    /**
     * @var string 工作空间中文名字
     */
    public $ChineseName;

    /**
     * @var string 工作空间描述
     */
    public $Description;

    /**
     * @var integer 工作空间是否删除状态
     */
    public $Status;

    /**
     * @var string 该工作空间绑定的区/县的行政区名字
     */
    public $ParkName;

    /**
     * @var string 该工作空间绑定的区/县的行政区编码
     */
    public $ParkNum;

    /**
     * @var array 获取该工作空间绑定的区/县的上级行政区划信息
     */
    public $AdministrativeDetailSet;

    /**
     * @param integer $WorkspaceId 工作空间Id
     * @param string $ChineseName 工作空间中文名字
     * @param string $Description 工作空间描述
     * @param integer $Status 工作空间是否删除状态
     * @param string $ParkName 该工作空间绑定的区/县的行政区名字
     * @param string $ParkNum 该工作空间绑定的区/县的行政区编码
     * @param array $AdministrativeDetailSet 获取该工作空间绑定的区/县的上级行政区划信息
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ChineseName",$param) and $param["ChineseName"] !== null) {
            $this->ChineseName = $param["ChineseName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ParkName",$param) and $param["ParkName"] !== null) {
            $this->ParkName = $param["ParkName"];
        }

        if (array_key_exists("ParkNum",$param) and $param["ParkNum"] !== null) {
            $this->ParkNum = $param["ParkNum"];
        }

        if (array_key_exists("AdministrativeDetailSet",$param) and $param["AdministrativeDetailSet"] !== null) {
            $this->AdministrativeDetailSet = [];
            foreach ($param["AdministrativeDetailSet"] as $key => $value){
                $obj = new AdministrativeDetail();
                $obj->deserialize($value);
                array_push($this->AdministrativeDetailSet, $obj);
            }
        }
    }
}
