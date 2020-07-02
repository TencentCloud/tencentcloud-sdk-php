<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryApplicationMaterial请求参数结构体
 *
 * @method string getDeclareId() 获取申报流水号
 * @method void setDeclareId(string $DeclareId) 设置申报流水号
 * @method string getProfile() 获取接入环境。沙箱环境填sandbox
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填sandbox
 */
class QueryApplicationMaterialRequest extends AbstractModel
{
    /**
     * @var string 申报流水号
     */
    public $DeclareId;

    /**
     * @var string 接入环境。沙箱环境填sandbox
     */
    public $Profile;

    /**
     * @param string $DeclareId 申报流水号
     * @param string $Profile 接入环境。沙箱环境填sandbox
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
        if (array_key_exists('DeclareId',$param) and $param['DeclareId'] !== null) {
            $this->DeclareId = $param['DeclareId'];
        }

        if (array_key_exists('Profile',$param) and $param['Profile'] !== null) {
            $this->Profile = $param['Profile'];
        }
    }
}
