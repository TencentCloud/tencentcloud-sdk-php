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
namespace TencentCloud\Tdcpg\V20211118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterBackups请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getPageNumber() 获取页码，取值范围为[1,INF)，默认值为1
 * @method void setPageNumber(integer $PageNumber) 设置页码，取值范围为[1,INF)，默认值为1
 * @method integer getPageSize() 获取每页个数，取值范围为默认为[1,100]，默认值为20
 * @method void setPageSize(integer $PageSize) 设置每页个数，取值范围为默认为[1,100]，默认值为20
 */
class DescribeClusterBackupsRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer 页码，取值范围为[1,INF)，默认值为1
     */
    public $PageNumber;

    /**
     * @var integer 每页个数，取值范围为默认为[1,100]，默认值为20
     */
    public $PageSize;

    /**
     * @param string $ClusterId 集群ID
     * @param integer $PageNumber 页码，取值范围为[1,INF)，默认值为1
     * @param integer $PageSize 每页个数，取值范围为默认为[1,100]，默认值为20
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
