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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义线路分组元素
 *
 * @method integer getDomainId() 获取域名ID
 * @method void setDomainId(integer $DomainId) 设置域名ID
 * @method integer getId() 获取自定义线路分组ID
 * @method void setId(integer $Id) 设置自定义线路分组ID
 * @method string getName() 获取自定义线路分组名称
 * @method void setName(string $Name) 设置自定义线路分组名称
 * @method array getLines() 获取自定义线路分组包含的线路
 * @method void setLines(array $Lines) 设置自定义线路分组包含的线路
 * @method string getCreatedOn() 获取创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间
 * @method string getUpdatedOn() 获取更新时间
 * @method void setUpdatedOn(string $UpdatedOn) 设置更新时间
 */
class LineGroupItem extends AbstractModel
{
    /**
     * @var integer 域名ID
     */
    public $DomainId;

    /**
     * @var integer 自定义线路分组ID
     */
    public $Id;

    /**
     * @var string 自定义线路分组名称
     */
    public $Name;

    /**
     * @var array 自定义线路分组包含的线路
     */
    public $Lines;

    /**
     * @var string 创建时间
     */
    public $CreatedOn;

    /**
     * @var string 更新时间
     */
    public $UpdatedOn;

    /**
     * @param integer $DomainId 域名ID
     * @param integer $Id 自定义线路分组ID
     * @param string $Name 自定义线路分组名称
     * @param array $Lines 自定义线路分组包含的线路
     * @param string $CreatedOn 创建时间
     * @param string $UpdatedOn 更新时间
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Lines",$param) and $param["Lines"] !== null) {
            $this->Lines = $param["Lines"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }
    }
}
