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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 园区信息
 *
 * @method integer getCampusId() 获取园区ID
 * @method void setCampusId(integer $CampusId) 设置园区ID
 * @method string getCampusName() 获取园区名称
 * @method void setCampusName(string $CampusName) 设置园区名称
 */
class Campus extends AbstractModel
{
    /**
     * @var integer 园区ID
     */
    public $CampusId;

    /**
     * @var string 园区名称
     */
    public $CampusName;

    /**
     * @param integer $CampusId 园区ID
     * @param string $CampusName 园区名称
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
        if (array_key_exists("CampusId",$param) and $param["CampusId"] !== null) {
            $this->CampusId = $param["CampusId"];
        }

        if (array_key_exists("CampusName",$param) and $param["CampusName"] !== null) {
            $this->CampusName = $param["CampusName"];
        }
    }
}
