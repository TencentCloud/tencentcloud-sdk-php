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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZoneDDoSPolicy返回参数结构体
 *
 * @method integer getAppId() 获取用户appid
 * @method void setAppId(integer $AppId) 设置用户appid
 * @method array getShieldAreas() 获取防护分区
 * @method void setShieldAreas(array $ShieldAreas) 设置防护分区
 * @method array getDomains() 获取所有子域名信息，包含安全加速/内容加速
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomains(array $Domains) 设置所有子域名信息，包含安全加速/内容加速
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeZoneDDoSPolicyResponse extends AbstractModel
{
    /**
     * @var integer 用户appid
     */
    public $AppId;

    /**
     * @var array 防护分区
     */
    public $ShieldAreas;

    /**
     * @var array 所有子域名信息，包含安全加速/内容加速
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domains;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AppId 用户appid
     * @param array $ShieldAreas 防护分区
     * @param array $Domains 所有子域名信息，包含安全加速/内容加速
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("ShieldAreas",$param) and $param["ShieldAreas"] !== null) {
            $this->ShieldAreas = [];
            foreach ($param["ShieldAreas"] as $key => $value){
                $obj = new ShieldArea();
                $obj->deserialize($value);
                array_push($this->ShieldAreas, $obj);
            }
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = [];
            foreach ($param["Domains"] as $key => $value){
                $obj = new DDoSApplication();
                $obj->deserialize($value);
                array_push($this->Domains, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
