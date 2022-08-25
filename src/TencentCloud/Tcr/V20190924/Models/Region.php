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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域信息
 *
 * @method string getAlias() 获取gz
 * @method void setAlias(string $Alias) 设置gz
 * @method integer getRegionId() 获取1
 * @method void setRegionId(integer $RegionId) 设置1
 * @method string getRegionName() 获取ap-guangzhou
 * @method void setRegionName(string $RegionName) 设置ap-guangzhou
 * @method string getStatus() 获取alluser
 * @method void setStatus(string $Status) 设置alluser
 * @method string getRemark() 获取remark
 * @method void setRemark(string $Remark) 设置remark
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 * @method integer getId() 获取id
 * @method void setId(integer $Id) 设置id
 */
class Region extends AbstractModel
{
    /**
     * @var string gz
     */
    public $Alias;

    /**
     * @var integer 1
     */
    public $RegionId;

    /**
     * @var string ap-guangzhou
     */
    public $RegionName;

    /**
     * @var string alluser
     */
    public $Status;

    /**
     * @var string remark
     */
    public $Remark;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @var integer id
     */
    public $Id;

    /**
     * @param string $Alias gz
     * @param integer $RegionId 1
     * @param string $RegionName ap-guangzhou
     * @param string $Status alluser
     * @param string $Remark remark
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
     * @param integer $Id id
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
