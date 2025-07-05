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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 探测组
 *
 * @method integer getGid() 获取线路组id GroupLineId
 * @method void setGid(integer $Gid) 设置线路组id GroupLineId
 * @method string getGroupType() 获取bgp, international, isp
 * @method void setGroupType(string $GroupType) 设置bgp, international, isp
 * @method string getGroupName() 获取组名
 * @method void setGroupName(string $GroupName) 设置组名
 * @method string getInternetFamily() 获取ipv4, ipv6
 * @method void setInternetFamily(string $InternetFamily) 设置ipv4, ipv6
 * @method array getPackageSet() 获取支持的套餐类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageSet(array $PackageSet) 设置支持的套餐类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class DetectorGroup extends AbstractModel
{
    /**
     * @var integer 线路组id GroupLineId
     */
    public $Gid;

    /**
     * @var string bgp, international, isp
     */
    public $GroupType;

    /**
     * @var string 组名
     */
    public $GroupName;

    /**
     * @var string ipv4, ipv6
     */
    public $InternetFamily;

    /**
     * @var array 支持的套餐类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageSet;

    /**
     * @param integer $Gid 线路组id GroupLineId
     * @param string $GroupType bgp, international, isp
     * @param string $GroupName 组名
     * @param string $InternetFamily ipv4, ipv6
     * @param array $PackageSet 支持的套餐类型
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
        if (array_key_exists("Gid",$param) and $param["Gid"] !== null) {
            $this->Gid = $param["Gid"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("InternetFamily",$param) and $param["InternetFamily"] !== null) {
            $this->InternetFamily = $param["InternetFamily"];
        }

        if (array_key_exists("PackageSet",$param) and $param["PackageSet"] !== null) {
            $this->PackageSet = $param["PackageSet"];
        }
    }
}
