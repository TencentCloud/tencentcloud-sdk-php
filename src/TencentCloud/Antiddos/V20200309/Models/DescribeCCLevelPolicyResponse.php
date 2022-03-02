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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCCLevelPolicy返回参数结构体
 *
 * @method string getLevel() 获取CC防护等级，可取值loose表示宽松，strict表示严格，normal表示适中， emergency表示攻击紧急， sup_loose表示超级宽松，default表示默认策略（无频控配置下发），customized表示自定义策略
 * @method void setLevel(string $Level) 设置CC防护等级，可取值loose表示宽松，strict表示严格，normal表示适中， emergency表示攻击紧急， sup_loose表示超级宽松，default表示默认策略（无频控配置下发），customized表示自定义策略
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCCLevelPolicyResponse extends AbstractModel
{
    /**
     * @var string CC防护等级，可取值loose表示宽松，strict表示严格，normal表示适中， emergency表示攻击紧急， sup_loose表示超级宽松，default表示默认策略（无频控配置下发），customized表示自定义策略
     */
    public $Level;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Level CC防护等级，可取值loose表示宽松，strict表示严格，normal表示适中， emergency表示攻击紧急， sup_loose表示超级宽松，default表示默认策略（无频控配置下发），customized表示自定义策略
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
