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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAutoRenewFlag请求参数结构体
 *
 * @method string getSubProduct() 获取资源Id，从DescribeUserResources接口中获取Level=1的正式月功能费的SubProduct，一般为sp_tiw_package
 * @method void setSubProduct(string $SubProduct) 设置资源Id，从DescribeUserResources接口中获取Level=1的正式月功能费的SubProduct，一般为sp_tiw_package
 * @method string getResourceId() 获取资源Id，从DescribeUserResources接口中获取Level=1的正式月功能费资源Id
 * @method void setResourceId(string $ResourceId) 设置资源Id，从DescribeUserResources接口中获取Level=1的正式月功能费资源Id
 * @method integer getAutoRenewFlag() 获取自动续费标记，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续 费，需要设置为0
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续 费，需要设置为0
 */
class ModifyAutoRenewFlagRequest extends AbstractModel
{
    /**
     * @var string 资源Id，从DescribeUserResources接口中获取Level=1的正式月功能费的SubProduct，一般为sp_tiw_package
     */
    public $SubProduct;

    /**
     * @var string 资源Id，从DescribeUserResources接口中获取Level=1的正式月功能费资源Id
     */
    public $ResourceId;

    /**
     * @var integer 自动续费标记，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续 费，需要设置为0
     */
    public $AutoRenewFlag;

    /**
     * @param string $SubProduct 资源Id，从DescribeUserResources接口中获取Level=1的正式月功能费的SubProduct，一般为sp_tiw_package
     * @param string $ResourceId 资源Id，从DescribeUserResources接口中获取Level=1的正式月功能费资源Id
     * @param integer $AutoRenewFlag 自动续费标记，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续 费，需要设置为0
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
        if (array_key_exists("SubProduct",$param) and $param["SubProduct"] !== null) {
            $this->SubProduct = $param["SubProduct"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
