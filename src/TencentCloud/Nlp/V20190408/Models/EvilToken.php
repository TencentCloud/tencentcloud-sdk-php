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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getEvilFlag() 获取文本是否恶意：
0、正常；
1、恶意；
2、可疑送审
 * @method void setEvilFlag(integer $EvilFlag) 设置文本是否恶意：
0、正常；
1、恶意；
2、可疑送审
 * @method array getEvilKeywords() 获取恶意关键词组
 * @method void setEvilKeywords(array $EvilKeywords) 设置恶意关键词组
 * @method integer getEvilType() 获取文本恶意类型：
0、正常；
1、政治；
2、色情；
3、辱骂/低俗；
4、暴恐/毒品；
5、广告/灌水；
6、迷信/邪教；
7、其他违法（如跨站追杀/恶意竞争等）；
8、综合
 * @method void setEvilType(integer $EvilType) 设置文本恶意类型：
0、正常；
1、政治；
2、色情；
3、辱骂/低俗；
4、暴恐/毒品；
5、广告/灌水；
6、迷信/邪教；
7、其他违法（如跨站追杀/恶意竞争等）；
8、综合
 */

/**
 *文本审核结果
 */
class EvilToken extends AbstractModel
{
    /**
     * @var integer 文本是否恶意：
0、正常；
1、恶意；
2、可疑送审
     */
    public $EvilFlag;

    /**
     * @var array 恶意关键词组
     */
    public $EvilKeywords;

    /**
     * @var integer 文本恶意类型：
0、正常；
1、政治；
2、色情；
3、辱骂/低俗；
4、暴恐/毒品；
5、广告/灌水；
6、迷信/邪教；
7、其他违法（如跨站追杀/恶意竞争等）；
8、综合
     */
    public $EvilType;
    /**
     * @param integer $EvilFlag 文本是否恶意：
0、正常；
1、恶意；
2、可疑送审
     * @param array $EvilKeywords 恶意关键词组
     * @param integer $EvilType 文本恶意类型：
0、正常；
1、政治；
2、色情；
3、辱骂/低俗；
4、暴恐/毒品；
5、广告/灌水；
6、迷信/邪教；
7、其他违法（如跨站追杀/恶意竞争等）；
8、综合
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EvilFlag",$param) and $param["EvilFlag"] !== null) {
            $this->EvilFlag = $param["EvilFlag"];
        }

        if (array_key_exists("EvilKeywords",$param) and $param["EvilKeywords"] !== null) {
            $this->EvilKeywords = $param["EvilKeywords"];
        }

        if (array_key_exists("EvilType",$param) and $param["EvilType"] !== null) {
            $this->EvilType = $param["EvilType"];
        }
    }
}
