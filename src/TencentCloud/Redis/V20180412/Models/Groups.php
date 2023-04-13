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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 复制组信息
 *
 * @method integer getAppId() 获取用户 APPID。APPID是与账号ID有唯一对应关系的应用 ID，部分腾讯云产品会使用此 APPID。
 * @method void setAppId(integer $AppId) 设置用户 APPID。APPID是与账号ID有唯一对应关系的应用 ID，部分腾讯云产品会使用此 APPID。
 * @method integer getRegionId() 获取地域ID 。
- 1：广州 
- 4：上海 
- 5：中国香港 
- 6：多伦多 
- 7：上海金融 
- 8：北京 
- 9：新加坡
- 11：深圳金融
- 15：美西（硅谷）
- 16：成都 
- 17：德国 
- 18：韩国 
- 19：重庆 
- 21：印度 
- 22：美东（弗吉尼亚）
- 23：泰国 
- 24：俄罗斯 
- 25：日本
 * @method void setRegionId(integer $RegionId) 设置地域ID 。
- 1：广州 
- 4：上海 
- 5：中国香港 
- 6：多伦多 
- 7：上海金融 
- 8：北京 
- 9：新加坡
- 11：深圳金融
- 15：美西（硅谷）
- 16：成都 
- 17：德国 
- 18：韩国 
- 19：重庆 
- 21：印度 
- 22：美东（弗吉尼亚）
- 23：泰国 
- 24：俄罗斯 
- 25：日本
 * @method string getGroupId() 获取复制组 ID。格式如：crs-rpl-deind****。
 * @method void setGroupId(string $GroupId) 设置复制组 ID。格式如：crs-rpl-deind****。
 * @method string getGroupName() 获取复制组名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置复制组名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取复制组状态。
- 37：绑定复制组中。
- 38：复制组重连中。
- 51：解绑复制组中。
- 52：复制组实例切主中。
- 53：角色变更中。
 * @method void setStatus(integer $Status) 设置复制组状态。
- 37：绑定复制组中。
- 38：复制组重连中。
- 51：解绑复制组中。
- 52：复制组实例切主中。
- 53：角色变更中。
 * @method integer getInstanceCount() 获取复制组数量。
 * @method void setInstanceCount(integer $InstanceCount) 设置复制组数量。
 * @method array getInstances() 获取复制组中的实例信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstances(array $Instances) 设置复制组中的实例信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Groups extends AbstractModel
{
    /**
     * @var integer 用户 APPID。APPID是与账号ID有唯一对应关系的应用 ID，部分腾讯云产品会使用此 APPID。
     */
    public $AppId;

    /**
     * @var integer 地域ID 。
- 1：广州 
- 4：上海 
- 5：中国香港 
- 6：多伦多 
- 7：上海金融 
- 8：北京 
- 9：新加坡
- 11：深圳金融
- 15：美西（硅谷）
- 16：成都 
- 17：德国 
- 18：韩国 
- 19：重庆 
- 21：印度 
- 22：美东（弗吉尼亚）
- 23：泰国 
- 24：俄罗斯 
- 25：日本
     */
    public $RegionId;

    /**
     * @var string 复制组 ID。格式如：crs-rpl-deind****。
     */
    public $GroupId;

    /**
     * @var string 复制组名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var integer 复制组状态。
- 37：绑定复制组中。
- 38：复制组重连中。
- 51：解绑复制组中。
- 52：复制组实例切主中。
- 53：角色变更中。
     */
    public $Status;

    /**
     * @var integer 复制组数量。
     */
    public $InstanceCount;

    /**
     * @var array 复制组中的实例信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Instances;

    /**
     * @var string 备注信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param integer $AppId 用户 APPID。APPID是与账号ID有唯一对应关系的应用 ID，部分腾讯云产品会使用此 APPID。
     * @param integer $RegionId 地域ID 。
- 1：广州 
- 4：上海 
- 5：中国香港 
- 6：多伦多 
- 7：上海金融 
- 8：北京 
- 9：新加坡
- 11：深圳金融
- 15：美西（硅谷）
- 16：成都 
- 17：德国 
- 18：韩国 
- 19：重庆 
- 21：印度 
- 22：美东（弗吉尼亚）
- 23：泰国 
- 24：俄罗斯 
- 25：日本
     * @param string $GroupId 复制组 ID。格式如：crs-rpl-deind****。
     * @param string $GroupName 复制组名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 复制组状态。
- 37：绑定复制组中。
- 38：复制组重连中。
- 51：解绑复制组中。
- 52：复制组实例切主中。
- 53：角色变更中。
     * @param integer $InstanceCount 复制组数量。
     * @param array $Instances 复制组中的实例信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注信息。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new Instances();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
